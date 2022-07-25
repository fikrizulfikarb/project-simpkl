<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa\Daftarlowongan;
use Illuminate\Http\Request;

class DaftarlowonganController extends Controller
{
    public function index()
    {
        $data['list_daftarlowongan'] = Daftarlowongan::all();
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        // $data['list_daftarlowongan'] = daftarlowongan::withCount('prodi')->get();
        return view('mahasiswa.daftarlowongan.index', $data);
    }

    // public function create()
    // {
    //     $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
    //     return view('mahasiswa.daftarlowongan.create', $data);
    // }

    // public function store()
    // {
    //     $daftarlowongan = new daftarlowongan;
    //     $daftarlowongan->id_mahasiswa = request('id_mahasiswa');
    //     $daftarlowongan->id_lowongan = request('id_lowongan');
    //     $daftarlowongan->alasan = request('alasan');
    //     $daftarlowongan->save();
    //     $id_pasien = $req->id_pasien;
	// 	return redirect('transaksi/'.$id_pasien);

    //     return redirect('mahasiwa/lowongan');
    // }
}
