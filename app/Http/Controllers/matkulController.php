<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matkul;

class matkulController extends Controller
{
    public function index(){
   	 $matkul = Matkul::all();
    	 return view('matkul.index',['matkul' => $matkul]);
   }

   public function create(){
    	return view('matkul.create');
   }

    public function store(Request $request){
    	$this->validate($request,[
    		'nama_matkul' => 'required'
    	]);
 
        matkul::create([
    		'nama_matkul' => $request->nama_matkul
    	]);
 
    	return redirect('matkul');
    }

    public function edit($id){
	   $matkul = Matkul::find($id);
	   return view('matkul.edit', ['matkul' => $matkul]);
	}

	public function update($id, Request $request){
	    $this->validate($request,[
		   'nama_matkul' => 'required'
	    ]);

	    $matkul = Matkul::find($id);
	    $matkul->nama_matkul = $request->nama_matkul;
	    $matkul->save();
	    return redirect('/matkul');
	}

	public function delete($id){
	    $matkul = Matkul::find($id);
	    $matkul->delete();
	    return redirect('/matkul');
	}
}
