<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use App\Models\SuperAdmin\MasterData\Syaratmagang;
use App\Models\Superadmin\MasterData\Prodi;
use App\Models\Mahasiswa\Profile;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // $data['filter_by'] = [];
        // $list_mahasiswa = Mahasiswa::query();
        // if(isset(request('filter') ['angkatan'] )); {
        //     $data['filter_by'][]= 'angkatan';
        //     $data['filter_angkatan'] = request('filter') ['angkatan'];
        //     $list_mahasiswa = $list_mahasiswa->where ('angkatan', request('filter') ['angkatan']);
        // }

        // if(isset(request('filter') ['program_studi'] )); {
        //     $data['filter_by'][]= 'program_studi';
        //     $data['filter_program_studi'] = request('filter') ['program_studi'];
        //     $list_mahasiswa = $list_mahasiswa->where ('program_studi', request('filter') ['program_studi']);
        // }
        
        // $list_mahasiswa = $list_mahasiswa->get();
        
        $data['list_mahasiswa'] = Mahasiswa::all();
        $data['pegawai'] = auth()->user();
        return view('admin.master-data.mahasiswa.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.mahasiswa.create', ['list_prodi' => Prodi::all()]);
    }

    public function store()
    {
        $mahasiswa = new mahasiswa;
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->agama = request('agama');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->id_prodi = request('id_prodi');
        $mahasiswa->angkatan = request('angkatan');
        $mahasiswa->password = request('password');
        $mahasiswa->save();
        $mahasiswa->handleUploadFoto();

        return redirect('admin/master-data/mahasiswa');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        $data['mahasiswa'] = $mahasiswa;
        return view('admin.master-data.mahasiswa.edit', ['list_prodi' => Prodi::all()], $data);
    }

    public function show(mahasiswa $mahasiswa)
    {

        $data['mahasiswa'] = $mahasiswa;
        $data['list_syaratmagang'] = Syaratmagang::all();
        return view('admin.master-data.mahasiswa.show', $data);
    }

    public  function update(Mahasiswa $mahasiswa)
    {
        $mahasiswa->nim = request('nim');
        $mahasiswa->nama = request('nama');
        $mahasiswa->agama = request('agama');
        $mahasiswa->jenis_kelamin = request('jenis_kelamin');
        $mahasiswa->tempat_lahir = request('tempat_lahir');
        $mahasiswa->tanggal_lahir = request('tanggal_lahir');
        $mahasiswa->id_prodi = request('id_prodi');
        $mahasiswa->angkatan = request('angkatan');
        if(request('password')) $mahasiswa->password = request('password');
        $mahasiswa->save();

        if(request('foto')) $mahasiswa->handleUploadFoto();

        return redirect('admin/master-data/mahasiswa');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->handleDelete();
        $mahasiswa->delete();
        return redirect('admin/master-data/mahasiswa');
    }
    
}

