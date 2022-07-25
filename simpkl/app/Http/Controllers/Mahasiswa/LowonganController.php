<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Instansi\MasterData\Lowongan;
use App\Models\Mahasiswa\Daftarlowongan;
use App\Models\Superadmin\MasterData\Dataperusahaan;
use App\Models\SuperAdmin\MasterData\Tahunajaran;
use Illuminate\Http\Request;

class LowonganController extends Controller
{
    public function index()
    {
        $data['list_lowongan'] = Lowongan::all();
        $data['list_tahunajaran'] = Tahunajaran::all();
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        return view('mahasiswa.lowongan.index', $data);
    }

    
    public function show(lowongan $lowongan)
    {
        $data['lowongan'] = $lowongan;
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_daftarlowongan'] = Daftarlowongan::all();
        $data['list_dataperusahaan'] = Dataperusahaan::all();
        $data['list_tahunajaran'] = Tahunajaran::all();
        
        return view('mahasiswa.lowongan.show', $data);

    }

    public function daftar(Request $request)
    {
        $daftarlowongan = Daftarlowongan::find($request->id);
        if($daftarlowongan) return back()->with('danger', 'Anda Sudah Daftar Lowongan');

        $daftarlowongan = new Daftarlowongan;
        $daftarlowongan->id = request('id');
        $daftarlowongan->id_lowongan = request('id_lowongan');
        $daftarlowongan->id_dataperusahaan = request('id_dataperusahaan');
        $daftarlowongan->status = 1;
        $daftarlowongan->alasan = request('alasan');
        $daftarlowongan->save();

        return back();
    }

    public function create()
    {
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        return view('mahasiswa.lowongan.show', $data);
    }

    // public function store()
    // {
    //     $daftarlowongan = new daftarlowongan;
    //     $daftarlowongan->id_mahasiswa = request('id_mahasiswa');
    //     $daftarlowongan->id_lowongan = request('id_lowongan');
    //     $daftarlowongan->id_dataperusahaan = request('id_dataperusahaan');
    //     $daftarlowongan->alasan = request('alasan');
    //     $daftarlowongan->save();

    //     return redirect('mahasiwa/lowongan');
    // }
}

    // public function create()
    // {
    //     $data['dataperusahaan'] = auth()->guard('dataperusahaan')->user();
    //     return view('mahasiswa.lowongan.create', ['list_prodi' => Prodi::all()], $data);
    // }

    // public function store()
    // {
    //     $lowongan = new lowongan;
    //     $lowongan->bidang = request('bidang');
    //     $lowongan->id_prodi = request('id_prodi');
    //     $lowongan->id_dataperusahaan = request('id_dataperusahaan');
    //     $lowongan->save();

    //     $prodi->nama_prodi = request('nama_prodi');
    //     $prodi->kode_prodi = request('kode_prodi');
    //     $prodi->nama_koordinator = request('nama_koordinator');
    //     $prodi->save();

    //     return redirect('mahasiswa/lowongan');
    // }

    // public function edit(lowongan $lowongan)
    // {
    //     $data['lowongan'] = $lowongan;
        
    //     return view('mahasiswa.lowongan.edit', $data);
    // }


    // public  function update(lowongan $lowongan)
    // {
    //     $lowongan->bidang = request('bidang');
    //     $lowongan->id_prodi = request('id_prodi');
    //     $lowongan->id_dataperusahaan = request('id_dataperusahaan');
    //     $lowongan->save();
        

    //     return redirect('mahasiswa/lowongan');
    // }

    // public function destroy(lowongan $lowongan)
    // {
    //     $lowongan->delete();
    //     return redirect('mahasiswa/lowongan');
    // }
