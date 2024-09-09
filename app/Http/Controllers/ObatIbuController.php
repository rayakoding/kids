<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\ObatJadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ObatIbuController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Obat',
            'obat' => Obat::where('user_id', Auth::user()->id)->get()
        ];

        return view('member.obat.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Obat',
        ];

        return view('member.obat.add', $data);
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

        return redirect('/obat_ibu');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Lihat Data Obat',
            'obat' => Obat::findOrFail($id),
        ];

        return view('member.obat.view', $data);
    }

    public function jadwal(Request $request)
    {
        $request->validate([
            'obat_id' => 'required',
        ]);

        ObatJadwal::create([
            'obat_id' => $request->obat_id,
        ]);
        Session::flash('hijau', 'Berhasil menambah data');

        return redirect('/obat_ibu');
    }

    public function delete($id)
    {
        $data = [
            'title' => 'Hapus Data Obat',
            'obat' => Obat::findOrFail($id),
        ];

        return view('member.obat.delete', $data);
    }

    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->delete();

        Session::flash('merah', 'data berhasil dihapus');

        return redirect('/obat_ibu');
    }
}
