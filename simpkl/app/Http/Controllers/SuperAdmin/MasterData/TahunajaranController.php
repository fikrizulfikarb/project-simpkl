<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Prodi;
use App\Http\Requests\SuperAdmin\TahunAjaran\StoreRequest;
use App\Models\SuperAdmin\MasterData\Tahunajaran;


class TahunajaranController extends Controller
{
    public function index()
    {
        $data['list_prodi'] = Prodi::all();
        $data['list_tahunajaran'] = Tahunajaran::all();
        return view('superadmin.master-data.tahunajaran.index', $data);
    }

    public function show(Tahunajaran $tahunajaran)
    {

        $data['tahunajaran'] = $tahunajaran;
        return view('superadmin.master-data.tahunajaran.show', $data);
    }

    public function storetahunajaran(StoreRequest $request)
    {
        $tahunajaran = new Tahunajaran();
        $tahunajaran->id_prodi = request('id_prodi');
        $tahunajaran->tahun_ajaran = request('tahun_ajaran');
        $tahunajaran->tanggal_buka = request('tanggal_buka');
        $tahunajaran->tanggal_tutup = request('tanggal_tutup');
        $tahunajaran->save();

        $data['list_tahunajaran'] = Tahunajaran::all();
        $data['list_prodi'] = Prodi::all();
        // return back();
        return redirect('superadmin/master-data/tahunajaran');
    }

    public function edit(Tahunajaran $tahunajaran)
    {
        $data['tahunajaran'] = $tahunajaran;
        return view('superadmin.master-data.tahunajaran.edit', ['list_prodi' => Prodi::all()], $data);
    }

    public  function update(Tahunajaran $tahunajaran)
    {
        $tahunajaran->tahun_ajaran = request('tahun_ajaran');
        $tahunajaran->id_prodi = request('id_prodi');
        $tahunajaran->tanggal_buka = request('tanggal_buka');
        $tahunajaran->tanggal_tutup = request('tanggal_tutup');
        $tahunajaran->save();

        return redirect('superadmin/master-data/tahunajaran');
    }

    public function destroy(Tahunajaran $tahunajaran)
    {
        $tahunajaran->delete();
        return redirect('superadmin/master-data/tahunajaran');
    }
}
