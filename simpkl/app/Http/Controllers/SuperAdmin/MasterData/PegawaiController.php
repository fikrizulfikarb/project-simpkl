<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Pegawai;
use App\Models\Superadmin\MasterData\Prodi;
use App\Models\SuperAdmin\MasterData\Role;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all(); 
        return view('superadmin.master-data.pegawai.index', $data);
    }

    public function create()
    {
        // return view('superadmin/master-data/pegawai/create');
        $data['pegawai'] = auth()->user();
        return view('superadmin.master-data.pegawai.create', ['list_prodi' => Prodi::all()], $data);
    }

    public function store()
    {
        $pegawai = new Pegawai;
        $pegawai->nip = request('nip');
        $pegawai->nama = request('nama');
        $pegawai->username = request('username');
        $pegawai->email = request('email');
        $pegawai->id_prodi = request('id_prodi');
        $pegawai->password = request('password');
        $pegawai->save();
        $pegawai->handleUploadFoto();

        return redirect('superadmin/master-data/pegawai');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('superadmin.master-data.pegawai.show', $data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        $data['list_prodi'] = Prodi::all(); 
        return view('superadmin.master-data.pegawai.edit', ['list_prodi' => Prodi::all()], $data);
        // return view('superadmin.master-data.pegawai.edit')->with('sucsses', 'Data Berhasil Di Edit');
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
        
        if(request('foto')) $pegawai->handleUploadFoto();

        return redirect('superadmin/master-data/pegawai');
    }

    public function destroy(Pegawai $pegawai)
    {
        $list_role = Role::where('id_pegawai', $pegawai->id)->get();
        if($list_role->count() > 0){
            $list_role->each(function($role){
                $role->delete();
            });
        }

        $pegawai->delete();
        return redirect('superadmin/master-data/pegawai');
    }

    

}
