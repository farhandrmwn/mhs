<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $primaryKey = 'id_mhs';
    protected $fillable = ['id_mhs','nama','created_at','updated_at'];
    
    public function matkul(){
        return $this->belongsTo('App\Matkul');
    }

    public function nilai(){
        return $this->hasMany('App\Nilai');
    }
}
