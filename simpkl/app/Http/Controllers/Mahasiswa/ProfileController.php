<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use App\Models\Mahasiswa\Profile;
use App\Models\Superadmin\MasterData\Prodi;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        
        return view('mahasiswa.profile.index', $data);
    }

    public function show(mahasiswa $profile)
    {

        $data['mahasiswa'] = $profile;
        return view('mahasiswa.profile.show', $data);
    }

    public function edit(Mahasiswa $profile)
    {
        $data['mahasiswa'] = $profile;
        // $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        return view('mahasiswa.profile.edit', $data);
    }

    public function update(Mahasiswa $profile)
    {
        $profile->agama = request('agama');
        $profile->jenis_kelamin = request('jenis_kelamin');
        $profile->tempat_lahir = request('tempat_lahir');
        $profile->tanggal_lahir = request('tanggal_lahir');
        if(request('password')) $profile->password = request('password');
        
        $profile->save();

        if(request('foto')) $profile->handleUploadFoto();

        return redirect('mahasiswa/profile');
    }

}


