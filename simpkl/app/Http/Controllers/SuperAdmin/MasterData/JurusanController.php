<?php

namespace App\Http\Controllers\SuperAdmin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Jurusan;
use App\Models\SuperAdmin\MasterData\Prodi;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        $data['list_jurusan'] = Jurusan::all();
        $data['list_jurusan'] = Jurusan::withCount('prodi')->get();
        return view('superadmin.master-data.jurusan.index', $data);
    }

    public function create()
    {
        return view('superadmin.master-data.jurusan.create');
    }

    public function store()
    {
        $jurusan = new jurusan;
        $jurusan->nama_jurusan = request('nama_jurusan');
        $jurusan->nama_ketua_jurusan = request('nama_ketua_jurusan');
        $jurusan->save();

        // $prodi = new prodi; 
        // $prodi->id_jurusan = $jurusan->id;
        // $prodi->nama_prodi = request('nama_prodi');
        // $prodi->kode_prodi = request('kode_prodi');
        // $prodi->nama_koordinator = request('nama_koordinator');
        // $prodi->save();

        return redirect('superadmin/master-data/jurusan');
    }

    public function edit(jurusan $jurusan)
    {
        $data['jurusan'] = $jurusan;
        return view('superadmin.master-data.jurusan.edit', $data);
    }

    public function show(jurusan $jurusan)
    {
        $data['jurusan'] = $jurusan;
        $data['list_jurusan'] = Jurusan::withCount('prodi')->get();
        return view('superadmin.master-data.jurusan.show', $data);

    }

    public  function update(jurusan $jurusan)
    {
        $jurusan->nama_jurusan = request('nama_jurusan');
        $jurusan->nama_ketua_jurusan = request('nama_ketua_jurusan');
        $jurusan->save();
        

        return redirect('superadmin/master-data/jurusan');
    }

    public function destroy(jurusan $jurusan)
    {
        $jurusan->delete();
        return redirect('superadmin/master-data/jurusan');
    }

}