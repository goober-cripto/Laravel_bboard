<?php

namespace App\Http\Controllers;

use App\Models\Bb;
use Illuminate\Http\Request;

class BbsController extends Controller
{
    public function index(){

        $content = ['bbs'=>Bb::latest()->get()];
        return view('index', $content);
    }

    public function detail(Bb $bb){
        return view('detail', ['bb'=>$bb]);
    }
}
