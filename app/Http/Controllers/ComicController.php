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

    public function getSingle($slug){
        // $single = Comic::find($id);
        $single = Comic::where('slug', $slug)->get();
        $single = $single[0];
        // dd($single);
        return view('detail_comic', compact('single'));
    }
}
