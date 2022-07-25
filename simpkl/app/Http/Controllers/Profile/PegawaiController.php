<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['pegawai'] = auth()->user();
        return view ('profile.pegawai', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        
        return view('profile.edit', $data);
    }

    public function update(Pegawai $pegawai)
    {
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        if(request('password')) $pegawai->password = request('password');
        $pegawai->save();
        
        if(request('foto')) $pegawai->handleUploadFoto();

        return redirect('profile/pegawai');
    }

}
