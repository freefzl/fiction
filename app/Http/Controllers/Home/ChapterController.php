<?php

namespace App\Http\Controllers\Home;

use App\Models\NovelType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChapterController extends Controller
{
    public function index(Request $request)
    {

        $types = NovelType::all();
        return view('home.chapter',compact('types'));
    }
}
