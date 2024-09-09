<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\User;
use App\Models\Periksa;
use App\Models\Kehamilan;
use App\Models\Puskesmas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $jumlah_imt18 = Kehamilan::where('imt', '<', 18)->count();
        $jumlah_imt30 = Kehamilan::where('imt', '>', 30)->count();

        $data =[
            'title' => 'Beranda Admin',
            'jumlah_pengguna' => User::where('role', '!=', 'Admin')->count(),
            'jumlah_kehamilan' => Kehamilan::All()->count(),
            'jumlah_desa' => Desa::All()->count(),
            'jumlah_puskesmas' => Puskesmas::All()->count(),
            'jumlah_periksa' => Periksa::All()->count(),
            'jumlah_imt' => $jumlah_imt18 + $jumlah_imt30,
            'jumlah_periksa' => Periksa::All()->count(),
            'jumlah_periksa_denyut' => Periksa::where('denyut', '>=', 1)->where('denyut', '<=', 120)->count(),
            'jumlah_hb' => Periksa::where('hb', '>=', 1)->where('hb', '<=', 11)->count()
        ];

        return view('admin.dashboard.index', $data);
    }
}
