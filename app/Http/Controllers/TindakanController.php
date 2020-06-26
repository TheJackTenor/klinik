<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tindakan;
use Validator;
use Session;

class TindakanController extends Controller
{
    //
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
    	$halaman = 'tindakan';
    	$tindakan_list = Tindakan::all()->sortBy('nama_tindakan');
        return view('tindakan', compact('halaman','tindakan_list'));
    }

    public function create()
    {
    	$halaman = 'tindakan';
    	return view('tindakan_tambah',compact('halaman'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nama_tindakan' => 'required|string|max:100',
            'kode_tindakan' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect('tindakan/create')
            ->withInput()
            ->withErrors($validator);
        }

    	Tindakan::create($request->all());

        Session::flash('flash_message', 'Data Tindakan Berhasil Disimpan.');

    	return redirect('tindakan');
    }

    public function edit($id)
    {
        $tindakan = Tindakan::findOrFail($id);
        return view('tindakan_edit', compact('tindakan'));
    }

    public function update($id, Request $request)
    {
        $tindakan = Tindakan::findOrFail($id);
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'nama_tindakan' => 'required|string|max:100',
            'kode_tindakan' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect('tindakan/'.$id.'/edit')
            ->withInput()
            ->withErrors($validator);
        }
        
        $tindakan->update($request->all());

        Session::flash('flash_message_update', 'Data Tindakan Berhasil di Update.');

        return redirect('tindakan');        
    }

    public function delete($id)
    {
        $tindakan = Tindakan::findOrFail($id);
        $tindakan->delete();

        Session::flash('flash_message_delete', 'Data Tindakan Berhasil Dihapus.');
        Session::flash('penting', true);

        return redirect('tindakan');
    }
}
