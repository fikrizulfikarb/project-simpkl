<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Pegawai;
use App\Models\Superadmin\MasterData\Prodi;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();  
        $data['pegawai'] = auth()->user();
        return view('admin.master-data.pegawai.index', $data);
    }

    public function create()
    {
        // return view('admin/master-data/pegawai/create');
        $data['pegawai'] = auth()->user();
        return view('admin.master-data.pegawai.create', ['list_prodi' => Prodi::all()], $data);
    }

    public function store()
    {
        $pegawai = new Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->id_prodi = request('id_prodi');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        $pegawai->password = request('password');
        $pegawai->save();

        return redirect('admin/master-data/pegawai');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.edit', $data);
    }

    public function update(Pegawai $pegawai)
    {
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->id_prodi = request('id_prodi');
        $pegawai->email = request('email');
        if(request('password')) $pegawai->password = request('password');
        $pegawai->save();

        return redirect('admin/master-data/pegawai');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('admin/master-data/pegawai');
    }
}
