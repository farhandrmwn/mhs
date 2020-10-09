<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Mahasiswa;
use App\Matkul;

class nilaiController extends Controller
{
    public function index(){
   	 $nilai = Nilai::all();
    	 return view('Nilai.index',['nilai' => $nilai]);
   }

   public function create(){

    	$mahasiswa = Mahasiswa::all();
    	$matkul = Matkul::all();
    	 return view('Nilai.create',['mahasiswa' => $mahasiswa, 'matkul' => $matkul]);

   }

    public function store(Request $request){
    	$this->validate($request,[
    		'id_mhs' => 'required',
    		'id_matkul' => 'required',
    		'nilai' => 'required'
    	]);
 
        Nilai::create([
        	'id_mhs' => $request->id_mhs,
        	'id_matkul' => $request->id_matkul,
    		'nilai' => $request->nilai
    	]);
 
    	return redirect('nilai');
    }
}
