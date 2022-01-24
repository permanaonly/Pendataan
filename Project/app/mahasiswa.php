<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $fillable = [ 'id','user_id','nama_lengkap','tempat_lahir','tanggal_lahir','email','no_wa','asal_sekolah','Jurusan', 'awal_magang','selesai_magang'];
    
    public function orangtua(){
    	return $this->hasone('App\orangtua' );
    }
}
