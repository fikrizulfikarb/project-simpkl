<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\DataPerusahaan\StoreRequest;
use App\Models\SuperAdmin\MasterData\Dataperusahaan;
use App\Models\Instansi\MasterData\Lowongan;
use App\Models\SuperAdmin\MasterData\Prodi;
use App\Models\SuperAdmin\MasterData\Role;
use App\Models\SuperAdmin\MasterData\Tahunajaran;
use Illuminate\Http\Request;

class DataperusahaanController extends Controller
{
    public function index()
    {
        $data['list_dataperusahaan'] = Dataperusahaan::all();
        $data['list_lowongan'] = Lowongan::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_tahunajaran'] = Tahunajaran::all();
        $data['pegawai'] = auth()->user();
        $data['list_dataperusahaan'] = Dataperusahaan::withCount('lowongan')->get();
        return view('admin.master-data.dataperusahaan.index', $data);
    }

    public function create()
    {
        $data['list_lowongan'] = Lowongan::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_tahunajaran'] = Tahunajaran::all();
        return view('admin.master-data.dataperusahaan.create');
    }

    public function store(StoreRequest $request)
    {
        $dataperusahaan = new dataperusahaan;
        $dataperusahaan->nama_perusahaan = request('nama_perusahaan');
        $dataperusahaan->no_handphone = request('no_handphone');
        $dataperusahaan->email = request('email');
        $dataperusahaan->alamat = request('alamat');
        $dataperusahaan->keterangan = request('keterangan');
        $dataperusahaan->password = request('password');
        $dataperusahaan->save();

        return redirect('admin/master-data/dataperusahaan');
    }

    public function storelowongan(Request $request)
    {
        $lowongan = new Lowongan();
        $lowongan->id_dataperusahaan = request('id_dataperusahaan');
        $lowongan->id_prodi = request('id_prodi');
        $lowongan->id_tahunajaran = request('id_tahunajaran');
        $lowongan->bidang = request('bidang');
        $lowongan->kuota = request('kuota');
        $lowongan->save();

        
        $data['list_lowongan'] = Lowongan::all();
        return back();
    }

    public function edit(Dataperusahaan $dataperusahaan)
    {
        $data['dataperusahaan'] = $dataperusahaan;
        return view('admin.master-data.dataperusahaan.edit', $data);
    }

    public function show(Dataperusahaan $dataperusahaan)
    {
        $data['dataperusahaan'] = $dataperusahaan;
        $data['list_lowongan'] = Lowongan::all();
        $data['list_prodi'] = Prodi::all();
        $data['list_tahunajaran'] = Tahunajaran::all();
        $data['pegawai'] = auth()->user();
        return view('admin.master-data.dataperusahaan.show', $data);
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

        return redirect('admin/master-data/dataperusahaan');
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
        return redirect('admin/master-data/dataperusahaan');
    }
}
