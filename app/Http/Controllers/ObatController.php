<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ObatController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Obat',
            'obat' => Obat::orderBy('created_at', 'desc')->get()
        ];

        return view('admin.obat.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Obat',
            'user' => User::where('role', '!=', 'Admin')->get()
        ];

        return view('admin.obat.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'jenis' => 'required',
        ]);

        Obat::create([
            'user_id' => $request->user_id,
            'jenis' => $request->jenis,
        ]);
        Session::flash('hijau', 'Berhasil menambah data');

        return redirect('/obat');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Lihat Data Obat',
            'obat' => Obat::findOrFail($id),
        ];

        return view('admin.obat.view', $data);
    }

    public function delete($id)
    {
        $data = [
            'title' => 'Hapus Data Obat',
            'obat' => Obat::findOrFail($id),
        ];

        return view('admin.obat.delete', $data);
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        Session::flash('merah', 'data berhasil dihapus');

        return redirect('/obat');
    }
}
