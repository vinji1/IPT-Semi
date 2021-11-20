<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;

class VideoController extends Controller
{
    public function index(){
        $videos = Videos::orderByRaw('title, rating')->limit(100)->get();
        return view('Videos.index', ['Videos' => $videos]);
    }
    public function create(){
        return view('Videos.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'rating' => 'required'
        ]);

        Videos::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'duration' => $request['duration'],
            'rating' => $request['rating'],

        ]);

        return redirect('/Videos')->with('info', 'A new video has been added.');
    }



}
