<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use Session;

class UserController extends Controller
{
    //
    
    public function __construct(){
        $this->middleware('auth');
    }

	protected function index_dokter(){
		$halaman = 'dokter';
		$user_list = User::all();
		$dokter = $user_list->where('level','=','dokter');
		$jumlah_dokter = $dokter->count();
		return view('dokter', compact('halaman','user_list','dokter','jumlah_dokter'));
	}

	protected function index_admin(){
		$halaman = 'admin';
		$user_list = User::all();
		$admin = $user_list->where('level','=','admin');
		$jumlah_admin = $admin->count();
		return view('admin', compact('halaman','user_list','admin','jumlah_admin'));
	}

	protected function create_dokter(){
		return view('dokter_tambah');
	}

	protected function create_admin(){
		return view('admin_tambah');
	}

	protected function store_dokter(Request $request){
		$data = $request->all();

		$validasi = Validator::make($data, [
			'name'	=>	'required|max:100',
			'email'	=>	'required|email|max:50|unique:user',
			'password'	=>	'required|confirmed|min:6',
			'level'	=>	'required|in:dokter,admin'
		]);
		if ($validasi->fails()){
			return redirect('dokter/create')
				->withInput()
				->withErrors($validasi);
		}

		// Hash password
		$data['password'] = bcrypt($data['password']);
		User::create($data);
		Session::flash('flash_message', 'Data Dokter Berhasil Disimpan.');

		return redirect('dokter');
	}

	protected function store_admin(Request $request){
		$data = $request->all();

		$validasi = Validator::make($data, [
			'name'	=>	'required|max:100',
			'email'	=>	'required|email|max:50|unique:user',
			'password'	=>	'required|confirmed|min:6',
			'level'	=>	'required|in:dokter,admin'
		]);
		if ($validasi->fails()){
			return redirect('admin/create')
				->withInput()
				->withErrors($validasi);
		}

		// Hash password
		$data['password'] = bcrypt($data['password']);
		User::create($data);
		Session::flash('flash_message', 'Data Admin Berhasil Disimpan.');

		return redirect('admin');
	}

	public function show($id){
		return redirect('dokter');
	}

	protected function edit($id){
		$user = User::findOrFail($id);
		return view('dokter_edit', compact('user'));
	}

	public function update($id, Request $request){
		$user = User::findOrFail($id);
		$data = $request->all();

		$validasi = Validator::make($data, [
			'name'	=>	'required|max:100',
			'email'	=>	'required|email|max:50|unique:user,email,'.$id,
			'password'	=>	'required|confirmed|min:6',
			'level'	=>	'required|in:dokter,admin'
		]);
		if ($validasi->fails()){
			return redirect('user/'.$id.'/edit')
				->withErrors($validasi)
				->withInput();
		}

		if($request->filled('password')){
			// Hash password
			$data['password'] = bcrypt($data['password']);
		} else{
			// Hapus password (password tidak diupdate)
			$data = array_except($data, ['password']);
		}
		
		$user->update($data);
		Session::flash('flash_message_update', 'Data User Berhasil di Update');

		return redirect('dokter');
	}

	public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('flash_message_delete', 'Data User Berhasil Dihapus.');
        Session::flash('penting', true);

        return redirect('dokter');
    }
}
