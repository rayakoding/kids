<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Pengguna',
            'user' => User::where('role', '!=', 'Admin')->orderBy('name', 'asc')->get(),
        ];

        return view('admin.user.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Pengguna',
        ];

        return view('admin.user.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt(1234),
        ]);

        Session::flash('hijau', 'Berhasil menambah data');

        return redirect('/user');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Lihat Data Pengguna',
            'user' => User::findOrFail($id),
        ];

        return view('admin.user.view', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data Pengguna',
            'user' => User::findOrFail($id),
        ];
        return view('admin.user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'tgl' => $request->tgl,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'pekerjaan' => $request->pekerjaan,
            'ayah' => $request->ayah,
            'gol_darah' => $request->gol_darah,
            'username' => $request->username,
            'email' => $request->email,
            'role' => 'Member',
            'password' => $request->password,
        ]);

        Session::flash('hijau', 'Anda berhasil mengubah data!');

        return redirect('/user');
    }

    public function delete($id)
    {
        $data = [
            'title' => 'Hapus Data Pengguna',
            'user' => User::findOrFail($id),
        ];

        return view('admin.user.delete', $data);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        Session::flash('merah', 'data berhasil dihapus');

        return redirect('/user');
    }
}
