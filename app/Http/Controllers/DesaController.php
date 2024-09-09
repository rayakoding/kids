<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DesaController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Desa',
            'desa' => Desa::orderBy('nama', 'asc')->get()
        ];

        return view('admin.desa.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Desa',
            'puskesmas' => Puskesmas::orderBy('nama', 'asc')->get(),
        ];

        return view('admin.desa.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'puskesmas_id' => 'required',
        ]);

        Desa::create([
            'nama' => $request->nama,
            'puskesmas_id' => $request->puskesmas_id,
        ]);

        Session::flash('hijau', 'Berhasil menambah data');

        return redirect('/desa');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Lihat Data Desa',
            'desa' => Desa::findOrFail($id),
        ];

        return view('admin.desa.view', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data Desa',
            'desa' => Desa::findOrFail($id),
            'puskesmas' => Puskesmas::orderBy('nama', 'asc')->get(),
        ];
        return view('admin.desa.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $desa = Desa::findOrFail($id);
        $desa->update([
            'nama' => $request->nama,
            'puskesmas_id' => $request->puskesmas_id,
        ]);

        Session::flash('hijau', 'Anda berhasil mengubah data!');

        return redirect('/desa');
    }

    public function delete($id)
    {
        $data = [
            'title' => 'Hapus Data Desa',
            'desa' => Desa::findOrFail($id),
        ];

        return view('admin.desa.delete', $data);
    }

    public function destroy($id)
    {
        $desa = Desa::findOrFail($id);
        $desa->delete();

        Session::flash('merah', 'data berhasil dihapus');

        return redirect('/desa');
    }
}
