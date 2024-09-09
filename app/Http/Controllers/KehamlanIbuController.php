<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Desa;
use App\Models\Kehamilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KehamlanIbuController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'Kehamilan',
        ];

        return view('member.kehamilan.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kehamilan',
            'desa' => Desa::orderBy('nama', 'asc')->get(),
        ];

        return view('member.kehamilan.add', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'desa_id' => 'required',
            'hamil' => 'required',
            'lahir' => 'required',
            'aborsi' => 'required',
            'hpht' => 'required',
            'bb' => 'required',
            'tb' => 'required',
            'lila' => 'required',
            'bidan' => 'required',
            'alamat_bidan' => 'required',
            'status' => 'required',
        ]);

        $hpht = $request->hpht;
        $hari = Carbon::parse($hpht)->addDays(7)->format('d F Y');
        $hpl = Carbon::parse($hari)->addMonths(9);
        $requser = $request->user_id;
        $noreg = 'kids-'.++$requser.'.'.$request->user_id.'.'.date('Y');

        $tb_rumus = $request->tb/100;
        $gabung = $tb_rumus*$tb_rumus;
        $hasilnya = $request->bb/$gabung;
        $output = number_format($hasilnya, 2, '.', '');

        Kehamilan::create([
            'user_id' => $request->user_id,
            'desa_id' => $request->desa_id,
            'hamil' => $request->hamil,
            'lahir' => $request->lahir,
            'aborsi' => $request->aborsi,
            'hpht' => $request->hpht,
            'hpl' => $hpl,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'lila' => $request->lila,
            'imt' => $output,
            'bidan' => $request->bidan,
            'alamat_bidan' => $request->alamat_bidan,
            'status' => $request->status,
            'noreg' => $noreg,
        ]);
        Session::flash('hijau', 'Berhasil menambah data');

        return redirect('/kehamilan_ibu');
    }

    public function show($id)
    {
        $data = [
            'title' => 'Lihat Data Kehamilan',
            'kehamilan' => Kehamilan::findOrFail($id),
        ];

        return view('member.kehamilan.view', $data);
    }

    public function show_obat($id)
    {
        $data = [
            'title' => 'Lihat Data Kehamilan',
            'kehamilan' => Kehamilan::findOrFail($id),
        ];

        return view('member.kehamilan.obat', $data);
    }

    public function show_obat_dua($id)
    {
        $data = [
            'title' => 'Lihat Data Kehamilan',
            'kehamilan' => Kehamilan::findOrFail($id),
        ];

        return view('member.kehamilan.obat_dua', $data);
    }

    public function show_obat_tiga($id)
    {
        $data = [
            'title' => 'Lihat Data Kehamilan',
            'kehamilan' => Kehamilan::findOrFail($id),
        ];

        return view('member.kehamilan.obat_tiga', $data);
    }

    public function show_obat_empat($id)
    {
        $data = [
            'title' => 'Lihat Data Kehamilan',
            'kehamilan' => Kehamilan::findOrFail($id),
        ];

        return view('member.kehamilan.obat_empat', $data);
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Ubah Data Kehamilan',
            'kehamilan' => Kehamilan::findOrFail($id),
            'desa' => Desa::orderBy('nama', 'asc')->get(),
        ];
        return view('member.kehamilan.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $kehamilan = Kehamilan::findOrFail($id);

        $hpht = $request->hpht;
        $hari = Carbon::parse($hpht)->addDays(7)->format('d F Y');
        $hpl = Carbon::parse($hari)->addMonths(9);
        $requser = $request->user_id;
        $noreg = 'HML-'.++$requser;

        $tb_rumus = $request->tb/100;
        $gabung = $tb_rumus*$tb_rumus;
        $hasilnya = $request->bb/$gabung;
        $output = number_format($hasilnya, 2, '.', '');

        $kehamilan->update([
            'user_id' => $request->user_id,
            'desa_id' => $request->desa_id,
            'hamil' => $request->hamil,
            'lahir' => $request->lahir,
            'aborsi' => $request->aborsi,
            'hpht' => $request->hpht,
            'hpl' => $hpl,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'lila' => $request->lila,
            'imt' => $output,
            'bidan' => $request->bidan,
            'alamat_bidan' => $request->alamat_bidan,
            'status' => $request->status,
            'noreg' => $noreg,
        ]);

        Session::flash('hijau', 'Anda berhasil mengubah data!');

        return redirect('/kehamilan_ibu');
    }

    public function delete($id)
    {
        $data = [
            'title' => 'Hapus Data Kehamilan',
            'kehamilan' => Kehamilan::findOrFail($id),
        ];

        return view('member.kehamilan.delete', $data);
    }

    public function destroy($id)
    {
        $kehamilan = Kehamilan::findOrFail($id);
        $kehamilan->delete();

        Session::flash('merah', 'data berhasil dihapus');

        return redirect('/kehamilan_ibu');
    }
}
