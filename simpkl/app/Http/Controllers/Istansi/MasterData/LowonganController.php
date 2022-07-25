<?php

namespace App\Http\Controllers\Istansi\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Instansi\MasterData\Lowongan;
use App\Models\Superadmin\MasterData\Prodi;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        $data['list_lowongan'] = Lowongan::all();
        $data['dataperusahaan'] = auth()->guard('dataperusahaan')->user();
        // $data['list_lowongan'] = Lowongan::withCount('prodi')->get();
        return view('istansi.master-data.lowongan.index', $data);
    }

    public function create()
    {
        $data['dataperusahaan'] = auth()->guard('dataperusahaan')->user();
        return view('istansi.master-data.lowongan.create', ['list_prodi' => Prodi::all()], $data);
    }

    public function store()
    {
        $lowongan = new lowongan;
        $lowongan->bidang = request('bidang');
        $lowongan->id_prodi = request('id_prodi');
        $lowongan->id_dataperusahaan = request('id_dataperusahaan');
        $lowongan->save();

        return redirect('istansi/master-data/lowongan');
    }

    public function show(lowongan $lowongan)
    {
        $data['lowongan'] = $lowongan;
        $data['list_lowongan'] = Lowongan::withCount('prodi')->get();
        return view('istansi.master-data.lowongan.show', $data);

    }

    public function edit(lowongan $lowongan)
    {
        $data['lowongan'] = $lowongan;
        return view('istansi.master-data.lowongan.edit', $data);
    }

    public  function update(lowongan $lowongan)
    {
        $lowongan->bidang = request('bidang');
        $lowongan->kuota = request('kuota');
        $lowongan->save();
        

        return redirect('istansi/master-data/lowongan');
    }

    public function destroy(lowongan $lowongan)
    {
        $lowongan->delete();
        return redirect('istansi/master-data/lowongan');
    }

}
