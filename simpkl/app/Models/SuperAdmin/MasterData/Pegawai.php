<?php

namespace App\Models\SuperAdmin\MasterData;

use App\Models\ModelAuthenticate;
use App\Models\SuperAdmin\MasterData\Profile;
use App\Models\SuperAdmin\MasterData\Role;
use App\Models\SuperAdmin\MasterData\Prodi;
use Illuminate\Support\Str;

class Pegawai extends ModelAuthenticate
{
    protected $table = 'superadmin__pegawai';

    public $fillable = ['nama', 'email'];

    public function role()
    {
        return $this->hasMany(Role::class, 'id_pegawai');
    }

    public function profile()
    {
        return $this->hasOne(profile::class, 'id_pegawai');
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function tahunajaran()
    {
        return $this->belongsTo(Tahunajaran::class, 'id_tahunajaran');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/pegawai";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/".$url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }

}
