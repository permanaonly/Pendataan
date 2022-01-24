<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendataan extends Model
{
    protected $table = "pendataan";

    protected $fillable = [ 'nama','tanggal_lahir','asal sekolah', 'masuk_sekolah'];
        
        
        
       
   
}
