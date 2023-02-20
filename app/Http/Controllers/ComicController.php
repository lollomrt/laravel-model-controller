<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic as Comic;

class ComicController extends Controller
{
    public function index(){
        $comics = Comic::all();
        return view('home', compact('comics'));
    }

    public function getSingle($id){
        $single = Comic::find($id);
        // dd($single);
        return view('detail_comic', compact('single'));
    }
}
