<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Syaratmagang;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Http\Request;

class SyaratmagangController extends Controller
{
    public function index()
    {
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        $data['list_syaratmagang'] = Syaratmagang::all();
        return view('mahasiswa.syaratmagang.index', $data);
    }

    public function create()
    {
        return view('mahasiswa.syaratmagang.create');
    }

    public function store()
    {
        $syaratmagang = new syaratmagang;
        $syaratmagang->id_mahasiswa = request()->user()->id;
        $syaratmagang->krs_semester = request('krs_semester');
        $syaratmagang->save();

        $syaratmagang->handleUploadSyaratMagang();

        return redirect('mahasiswa/syaratmagang');
    }

    public function show(Syaratmagang $syaratmagang)
    {
        $data['mahasiswa'] = auth()->guard('mahasiswa')->user();
        
        $data['syaratmagang'] = $syaratmagang;
        $data['list_mahasiswa'] = Mahasiswa::all();
        return view('mahasiswa.syaratmagang.show', $data);
    }

    public function destroy(Syaratmagang $syaratmagang)
    {
        $syaratmagang->handleDelete();
        $syaratmagang->delete();

        return redirect('mahasiswa/syaratmagang');
    }

}
