<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Profil Saya',
        ];

        return view('admin.profile.index', $data);
    }

    public function edit()
    {
        $data = [
            'title' => 'Ubah Data Pengguna'
        ];
        return view('admin.profile.edit', $data);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->tgl = $request->tgl;
        $user->alamat = $request->alamat;
        $user->telp = $request->telp;
        $user->pekerjaan = $request->pekerjaan;
        $user->ayah = $request->ayah;
        $user->gol_darah = $request->gol_darah;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $request->password;
        $user->save();

        Session::flash('hijau', 'Anda berhasil mengubah data!');

        return redirect('/profile');
    }
}
