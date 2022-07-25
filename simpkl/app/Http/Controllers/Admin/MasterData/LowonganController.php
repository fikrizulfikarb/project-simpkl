<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Instansi\MasterData\Lowongan;
use App\Models\Mahasiswa\Daftarlowongan;
use App\Models\Superadmin\MasterData\Dataperusahaan;
use App\Models\Superadmin\MasterData\Prodi;

class LowonganController extends Controller
{
    public function index()
    {

        $data['list_lowongan'] = Lowongan::all();
        $data['pegawai'] = auth()->user();
        return view('admin.master-data.lowongan.index', $data);
    }

    public function show(lowongan $lowongan)
    {
        $data['lowongan'] = $lowongan;
        $data['pegawai'] = auth()->user();
        $data['list_daftarlowongan'] = Daftarlowongan::all();
        $data['list_dataperusahaan'] = Dataperusahaan::all();
        return view('admin.master-data.lowongan.show', $data);

    }

    public function detail(lowongan $lowongan)
    {
        $data['lowongan'] = $lowongan;
        $data['pegawai'] = auth()->user();
        $data['list_daftarlowongan'] = Daftarlowongan::all();
        $data['list_dataperusahaan'] = Dataperusahaan::all();
        return view('admin.master-data.lowongan.detail', $data);

    }

    public function edit(Lowongan $lowongan)
    {
        $data['lowongan'] = $lowongan;
        return view('admin.master-data.lowongan.edit', $data);
    }

    public  function update(lowongan $lowongan)
    {
        $lowongan->bidang = request('bidang');
        $lowongan->kuota = request('kuota');
        $lowongan->save();
        

        return back();
    }

    public function destroy(lowongan $lowongan)
    {
        $lowongan->delete();
        return back();
        // return redirect('admin/master-data/lowongan');
    }

    public function setuju($id)
    {
        $daftarlowongan = Daftarlowongan::find($id);
        $daftarlowongan->status = 2;
        $daftarlowongan->save();
        
        return back()->with('success', 'Pengajuan Disetujui');
    }

    public function ditolak($id)
    {
        $lowongan = Daftarlowongan::find($id);
        $lowongan->status = 3;
        $lowongan->save();
        
        return back()->with('danger', 'Pengajuan Ditolak');
    }

    public function dipulihkan($id)
    {
        $lowongan = Daftarlowongan::find($id);
        $lowongan->status = 1;
        $lowongan->save();
        
        return back()->with('success', 'Pengajuan Dipulihkan');
    }

}