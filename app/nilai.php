<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table = 'nilais';
    protected $primaryKey = 'id_nilai';
    protected $fillable = ['id_nilai','id_mhs','id_matkul','nilai','created_at','updated_at'];
    
    public function mahasiswa(){
        return $this->belongsTo('App\Mahasiswa');
    }
}
