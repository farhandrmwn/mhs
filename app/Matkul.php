<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $table = 'matkuls';
    protected $primaryKey = 'id_matkul';
    protected $fillable = ['id_matkul','nama_matkul','created_at','updated_at'];
    
    public function mahasiswa(){
        return $this->hasMany('App\Mahasiswa');
    }
}
