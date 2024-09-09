<?php

namespace App\Http\Controllers;

use App\Models\Puskesmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PuskesmasController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Puskesmas',
            'puskesmas' => Puskesmas::orderBy('nama', 'asc')->get()
        ];

        return view('admin.puskesmas.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Puskesmas',
        ];

        return view('admin.puskesmas.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Puskesmas::create([
            'nama' => $request->nama,
        ]);

        Session::flash('hijau', 'Berhasil menambah data');

        return redirect('/puskesmas');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Lihat Data Puskesmas',
            'puskesmas' => Puskesmas::findOrFail($id),
        ];

        return view('admin.puskesmas.view', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data Puskesmas',
            'puskesmas' => Puskesmas::findOrFail($id),
        ];
        return view('admin.puskesmas.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $puskesmas = Puskesmas::findOrFail($id);
        $puskesmas->update([
            'nama' => $request->nama,
        ]);

        Session::flash('hijau', 'Anda berhasil mengubah data!');

        return redirect('/puskesmas');
    }

    public function delete($id)
    {
        $data = [
            'title' => 'Hapus Data Puskesmas',
            'puskesmas' => Puskesmas::findOrFail($id),
        ];

        return view('admin.puskesmas.delete', $data);
    }

    public function destroy($id)
    {
        $puskesmas = Puskesmas::findOrFail($id);
        $puskesmas->delete();

        Session::flash('merah', 'data berhasil dihapus');

        return redirect('/puskesmas');
    }
}
