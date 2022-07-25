<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Dataperusahaan;
use Illuminate\Http\Request;

class DataperusahaanController extends Controller
{
    public function index()
    {
        $data['list_dataperusahaan'] = Dataperusahaan::all();
        return view('mahasiswa.dataperusahaan.index', $data);
    }

    public function show(Dataperusahaan $dataperusahaan)
    {
        $data['dataperusahaan'] = $dataperusahaan;
        return view('mahasiswa.dataperusahaan.show', $data);
    }
}
