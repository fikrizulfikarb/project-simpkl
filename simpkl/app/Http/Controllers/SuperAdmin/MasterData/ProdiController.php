<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Prodi;
use App\Models\SuperAdmin\MasterData\Jurusan;
use App\Models\Instansi\MasterData\Lowongan;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    public function index()
    {
        $data['list_prodi'] = Prodi::all();
        $data['list_Jurusan'] = Jurusan::all();
        return view('superadmin.master-data.prodi.index', $data);
    }

    public function create()
    {
        // return view('superadmin.master-data.prodi.create');
        return view('superadmin.master-data.prodi.create', ['list_jurusan' => Jurusan::all()]);
    }

    public function store()
    {
        $prodi = new prodi;
        $prodi->nama_prodi = request('nama_prodi');
        $prodi->kode_prodi = request('kode_prodi');
        $prodi->id_jurusan = request('id_jurusan');
        $prodi->nama_koordinator = request('nama_koordinator');
        $prodi->save();


        return redirect('superadmin/master-data/prodi');
    }

    public function edit(prodi $prodi)
    {
        $data['prodi'] = $prodi;
        return view('superadmin.master-data.prodi.edit', ['list_jurusan' => Jurusan::all()], $data);
        // return view('superadmin.master-data.prodi.edit', $data);
    }

    public function show(prodi $prodi)
    {
        $data['prodi'] = $prodi;
        return view('superadmin.master-data.prodi.show', $data);
    }

    public  function update(prodi $prodi)
    {
        $prodi->nama_prodi = request('nama_prodi');
        $prodi->kode_prodi = request('kode_prodi');
        $prodi->id_jurusan = request('id_jurusan');
        $prodi->nama_koordinator = request('nama_koordinator');
        $prodi->save();

        return redirect('superadmin/master-data/prodi');
    }

    public function destroy(prodi $prodi)
    {
        $prodi->delete();
        return redirect('superadmin/master-data/prodi');
    }
}