<?php

namespace App\Models\SuperAdmin\MasterData;

use App\Models\SuperAdmin\MasterData\Syaratmagang;
use App\Models\Mahasiswa\Profile;
use App\Models\SuperAdmin\MasterData\Prodi;
use Illuminate\Support\Str;

use App\Models\ModelAuthenticate;
use Illuminate\Support\Carbon;

class Mahasiswa extends ModelAuthenticate
{
    protected $table = 'superadmin__mahasiswa';

    public $fillable = ['nim'];

    public function syaratmagang()
    {
        return $this->hasMany(Syaratmagang::class, 'id_mahasiswa');
    }

    public function syarat()
    {
        return $this->hasOne(Syaratmagang::class, 'id_mahasiswa');
    }

    public function profile()
    {
        return $this->hasOne(profile::class, 'id_mahasiswa');
    }

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'id_prodi');
    }

    public function tahunajaran()
    {
        return $this->belongsTo(Tahunajaran::class, 'id_tahunajaran');
    }

    public function lowongan()
    {
        return $this->hasMany(Lowongan::class,'id');
    }

    public function daftarlowongan()
    {
        return $this->hasMany(Daftarlowongan::class,'id');
    }

    
    public function getTanggalLahirStringAttribute()
    {
        return Carbon::parse($this->attributes['tanggal_lahir'])->translatedFormat('d F Y');
    }

    function handleUploadFoto()
    {
        $this->handleDelete();
        if(request()->hasFile('foto')){
            $foto = request()->file('foto');
            $destination = "images/mahasiswa";
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
