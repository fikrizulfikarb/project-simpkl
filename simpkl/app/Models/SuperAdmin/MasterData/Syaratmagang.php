<?php

namespace App\Models\SuperAdmin\MasterData;
use App\Models\SuperAdmin\MasterData\Mahasiswa;
use Illuminate\Support\Str;

use App\Models\ModelAuthenticate;

class Syaratmagang extends ModelAuthenticate
{
    protected $table = 'superadmin__syaratmagang';

    public $fillable = ['syarat_magang'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'id_mahasiswa');
    }

    function handleUploadSyaratMagang()
    {
        $this->handleDelete();
        if(request()->hasFile('syarat_magang')){
            $syarat_magang = request()->file('syarat_magang');
            $destination = "syaratmagang";
            $randomStr = Str::random(5);
            $filename = $this->id."-".time()."-".$randomStr.".".$syarat_magang->extension();
            $url = $syarat_magang->storeAs($destination, $filename);
            $this->syarat_magang = "app/".$url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $syarat_magang = $this->syarat_magang;
        if($syarat_magang){
            $path = public_path($syarat_magang);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
