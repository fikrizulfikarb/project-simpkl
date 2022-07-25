<?php

namespace App\Http\Controllers\Istansi\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\MasterData\Dataperusahaan;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data['dataperusahaan'] = auth()->guard('dataperusahaan')->user();
        return view('istansi.master-data.profile.index', $data);
    }

    public function edit( $dataperusahaan)
    {
        $data['dataperusahaan'] = $dataperusahaan;
        
        return view('istansi.master-data.profile.edit', $data);
    }
}
