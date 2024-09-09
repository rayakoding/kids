<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use App\Models\Kehamilan;
use Illuminate\Http\Request;

class WarningController extends Controller
{
    public function index()
    {
        $data =[
            'title' => 'IMT Abnormal',
            'imt_18' => Kehamilan::where('imt', '<', 18)->get(),
            'imt_30' => Kehamilan::where('imt', '>', 30)->get()
        ];

        return view('admin.warning.imt', $data);
    }

    public function hb()
    {
        $data =[
            'title' => 'HB Abnormal',
            'hb' => Periksa::where('hb', '>=', 1)->where('hb', '<=', 11)->get(),
        ];

        return view('admin.warning.hb', $data);
    }

    public function denyut()
    {
        $data =[
            'title' => 'Denyut Abnormal',
            'denyut' => Periksa::where('denyut', '>=', 1)->where('denyut', '<=', 120)->get(),
        ];

        return view('admin.warning.denyut', $data);
    }
}
