<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orangtua extends Model
{
    protected $table = "orangtua";
    protected $fillable = ['mahasiswa_id','nama_orangtua','pekerjaan_orangtua'];
    
    public function mahasiswa(){
    	return $this->belongsTo('App\mahasiswa');
    }
}
