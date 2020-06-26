<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
// use Illuminate\Http\RedirectResponse;
use App\Diagnosa;
use Validator;
use Session;

class DiagnosaController extends Controller
{
    //
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
    	$halaman = 'diagnosa';
    	$diagnosa_list = Diagnosa::all()->sortBy('nama_diagnosa');
        return view('diagnosa', compact('halaman','diagnosa_list'));
    }

    public function create()
    {
    	$halaman = 'diagnosa';
    	return view('diagnosa_tambah',compact('halaman'));
    }

    public function store(Request $request)
    {
    	$input = $request->all();
        $validator = Validator::make($input, [
            'nama_diagnosa' => 'required|string|max:100',
            'kode_diagnosa' => 'required|string',
        ]);

        if($validator->fails()){
            return Redirect::back()
            ->withErrors($validator)
            ->withInput();
        }

        Diagnosa::create($input);

        Session::flash('flash_message', 'Data Diagnosa Berhasil Disimpan.');

    	return redirect('diagnosa');
    }

    public function edit($id)
    {
    	$diagnosa = Diagnosa::findOrFail($id);
    	return view('diagnosa_edit', compact('diagnosa'));
    }

    public function update($id, Request $request)
    {
        $diagnosa = Diagnosa::findOrFail($id);
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'nama_diagnosa' => 'required|string|max:100',
            'kode_diagnosa' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect('diagnosa/'.$id.'/edit')
            ->withInput()
            ->withErrors($validator);
        }

        $diagnosa->update($request->all());

        Session::flash('flash_message_update', 'Data Diagnosa Berhasil di Update.');

        return redirect('diagnosa');           
    }

    public function delete($id)
    {
        $diagnosa = Diagnosa::findOrFail($id);
        $diagnosa->delete();

        Session::flash('flash_message_delete', 'Data Diagnosa Berhasil Dihapus.');
        Session::flash('penting', true);

        return redirect('diagnosa');
    }
}
