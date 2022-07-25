<?php

namespace App\Http\Controllers\Istansi\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Pegawai;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all(); 
        return view('istansi.master-data.pegawai.index', $data);
    }

    public function create()
    {
        return view('istansi/master-data/pegawai/create');
    }

    public function store()
    {
        $pegawai = new Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        $pegawai->password = request('password');
        $pegawai->save();

        return redirect('istansi/master-data/pegawai');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('istansi.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('istansi.master-data.pegawai.edit', $data);
    }

    public function update(Pegawai $pegawai)
    {
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        if(request('password')) $pegawai->password = request('password');
        $pegawai->save();

        return redirect('istansi/master-data/pegawai');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('istansi/master-data/pegawai');
    }
}
