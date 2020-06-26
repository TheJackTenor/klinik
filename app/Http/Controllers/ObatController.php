<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;
use Validator;
use Session;

class ObatController extends Controller
{
    //

    public function __construct(){
        $this->middleware('auth');
    }

	public function index()
    {
    	$halaman = 'obat';
    	$obat_list = Obat::all()->sortBy('nama_obat');
        // $stok_list = Obat::all()->select('stok')->get();
        // if ($stok_list <)
        return view('obat', compact('halaman','obat_list'));
    }

    public function create()
    {
    	$halaman = 'obat';
    	return view('obat_tambah',compact('halaman'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'nama_obat' => 'required|string|max:100',
            'stok' => 'required|integer',
            'satuan' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect('obat/create')
            ->withInput()
            ->withErrors($validator);
        }

    	Obat::create($request->all());

        Session::flash('flash_message', 'Data Obat Berhasil Disimpan.');

    	return redirect('obat');
    }

    public function edit($id)
    {
    	$obat = Obat::findOrFail($id);
    	return view('obat_edit', compact('obat'));
    }

    public function update($id, Request $request)
    {
        $obat = Obat::findOrFail($id);
        $input = $request->all();
        
        $validator = Validator::make($input, [
            'nama_obat' => 'required|string|max:100',
            'stok' => 'required|integer',
            'satuan' => 'required|string',
        ]);

        if($validator->fails()){
            return redirect('diagnosa/'.$id.'/edit')
            ->withInput()
            ->withErrors($validator);
        }

        $obat->update($request->all());

        Session::flash('flash_message_update', 'Data Obat Berhasil di Update.');

        return redirect('obat');        
    }

    public function delete($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        Session::flash('flash_message_delete', 'Data Obat Berhasil Dihapus.');
        Session::flash('penting', true);

        return redirect('obat');
    }
}
