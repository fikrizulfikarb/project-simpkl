<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Pegawai;
use Illuminate\Http\Request;


class ProfileController extends Controller
{
    public function index()
    {
        $user = request()->user();
        $data['list_pegawai'] = Pegawai::all();
        return view('superadmin.master-data.profile.index', $data);
    }

    public function edit( $pegawai)
    {
        $data['pegawai'] = $pegawai;
        
        return view('superadmin.master-data.profile.edit', $data);
    }
}
