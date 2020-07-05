<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index(){
    	$artikels = Artikel::orderBy('id','desc')->paginate(100);
    	return view('artikels.index',compact('artikels'));
    }

    public function form_create(){
    	return view('artikels.create');
    }

    public function create(Request $request){
    	$this->validate($request,[
    		'judul' => 'required',
    		'isi' => 'required',
    		'tag' => 'required',
    		'slug' => 'required',
    		'user_id' => 'required'
    	]);
    	$artikel = new Artikel();
    	$artikel->judul = $request->judul;
    	$artikel->isi = $request->isi;
    	$artikel->slug = $request->slug;
    	$artikel->tag = $request->tag;
    	$artikel->save();
    	return redirect('/artikel');
    }

    public function detail($id){
    	$artikels = Artikel::find($id);
    	return view('artikels.detail',compact('artikels'));
    }

	public function edit($id){
    	$artikels = Artikel::find($id);
    	return view('artikels.edit',compact('artikels'));
    }

    public function edit_data(Request $request, $id){
        $artikels = Artikel::find($id);
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',
            'tag' => 'required',
    		'slug' => 'required',
    		'users_id' => 'required'
        ]);
        $artikels = new Artikel();
        $artikels->judul = $request->input('judul');
        $artikels->isi = $request->input('isi');
        $artikels->tag = $request->input('tag');
        $artikels->slug = $request->input('slug');
        $artikels->users_id = $request->input('users_id');
        $data = array(
            'judul' => $artikels->judul,
            'isi' => $artikels->isi,
            'tag' => $artikels->tag,
            'slug' => $artikels->slug
        );
        Artikel::where('id',$id)
        ->update($data);
        $artikels->update($data);
        return redirect('/artikel');
    }

    public function delete($id){
    	Artikel::where('id',$id)
    	->delete();
    	return redirect()->back();
    }
}
