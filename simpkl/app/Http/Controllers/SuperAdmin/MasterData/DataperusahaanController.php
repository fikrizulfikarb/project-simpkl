<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Dataperusahaan;
use App\Models\SuperAdmin\MasterData\Role;

class DataperusahaanController extends Controller
{
    public function index()
    {
        $data['list_dataperusahaan'] = Dataperusahaan::all();
        return view('superadmin.master-data.dataperusahaan.index', $data);
    }

    public function create()
    {
        return view('superadmin.master-data.dataperusahaan.create');
    }

    public function store()
    {
        $dataperusahaan = new dataperusahaan;
        $dataperusahaan->nama_perusahaan = request('nama_perusahaan');
        $dataperusahaan->no_handphone = request('no_handphone');
        $dataperusahaan->email = request('email');
        $dataperusahaan->alamat = request('alamat');
        $dataperusahaan->keterangan = request('keterangan');
        $dataperusahaan->password = request('password');
        $dataperusahaan->save();

        return redirect('superadmin/master-data/dataperusahaan');
    }

    public function edit(Dataperusahaan $dataperusahaan)
    {
        $data['dataperusahaan'] = $dataperusahaan;
        return view('superadmin.master-data.dataperusahaan.edit', $data);
    }

    public function show(Dataperusahaan $dataperusahaan)
    {
        $data['dataperusahaan'] = $dataperusahaan;
        return view('superadmin.master-data.dataperusahaan.show', $data);
    }

    public  function update(Dataperusahaan $dataperusahaan)
    {
        $dataperusahaan->nama_perusahaan = request('nama_perusahaan');
        $dataperusahaan->alamat = request('alamat');
        $dataperusahaan->no_handphone = request('no_handphone');
        $dataperusahaan->email = request('email');
        $dataperusahaan->keterangan = request('keterangan');
        if(request('password')) $dataperusahaan->password = request('password');
        $dataperusahaan->save();

        return redirect('superadmin/master-data/dataperusahaan');
    }

    public function destroy(Dataperusahaan $dataperusahaan)
    {
        $list_role = Role::where('id_dataperusahaan', $dataperusahaan->id)->get();
        if($list_role->count() > 0){
            $list_role->each(function($role){
                $role->delete();
            });
        }

        $dataperusahaan->delete();
        return redirect('superadmin/master-data/dataperusahaan');
    }
}
