<?php

namespace App\Http\Controllers\Istansi\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Instansi\MasterData\Lowongan;
use App\Models\SuperAdmin\MasterData\Dataperusahaan;

class DataperusahaanController extends Controller
{
    public function index()
    {
        $data['list_dataperusahaan'] = Dataperusahaan::all();
        return view('istansi.master-data.dataperusahaan.index', $data);
    }

    public function create()
    {
        return view('istansi.master-data.dataperusahaan.create');
    }

    public function store()
    {
        $dataperusahaan = new dataperusahaan;
        $dataperusahaan->nama_perusahaan = request('nama_perusahaan');
        $dataperusahaan->alamat = request('alamat');
        $dataperusahaan->username = request('username');
        $dataperusahaan->email = request('email');
        $dataperusahaan->password = request('password');
        $dataperusahaan->save();

        return redirect('istansi/master-data/dataperusahaan');
    }

    public function edit(Dataperusahaan $dataperusahaan)
    {
        $data['dataperusahaan'] = $dataperusahaan;
        
        return view('istansi.master-data.dataperusahaan.edit', $data);
    }

    public function show(Dataperusahaan $dataperusahaan)
    {
        $data['dataperusahaan'] = $dataperusahaan;
        return view('istansi.master-data.dataperusahaan.show', $data);
    }

    public  function update(Dataperusahaan $dataperusahaan)
    {
        $dataperusahaan->nama_perusahaan = request('nama_perusahaan');
        $dataperusahaan->alamat = request('alamat');
        $dataperusahaan->username = request('username');
        $dataperusahaan->email = request('email');
        if(request('password')) $dataperusahaan->password = request('password');
        $dataperusahaan->save();

        return redirect('istansi/master-data/dataperusahaan');
    }

    public function destroy(Dataperusahaan $dataperusahaan)
    {
        $dataperusahaan->delete();
        return redirect('istansi/master-data/dataperusahaan');
    }
}
