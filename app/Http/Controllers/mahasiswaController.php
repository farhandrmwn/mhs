<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class mahasiswaController extends Controller
{
    public function index(){
   	 $mahasiswa = Mahasiswa::all();
    	 return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
   }

   public function create(){
    	return view('mahasiswa.create');
   }

    public function store(Request $request){
    	$this->validate($request,[
    		'nama' => 'required'
    	]);
 
        Mahasiswa::create([
    		'nama' => $request->nama
    	]);
 
    	return redirect('mahasiswa');
    }

    public function edit($id){
	   $mahasiswa = Mahasiswa::find($id);
	   return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
	}

	public function update($id, Request $request){
	    $this->validate($request,[
		   'nama' => 'required'
	    ]);

	    $mahasiswa = Mahasiswa::find($id);
	    $mahasiswa->nama = $request->nama;
	    $mahasiswa->save();
	    return redirect('/mahasiswa');
	}

	public function delete($id){
	    $mahasiswa = Mahasiswa::find($id);
	    $mahasiswa->delete();
	    return redirect('/mahasiswa');
	}
}
