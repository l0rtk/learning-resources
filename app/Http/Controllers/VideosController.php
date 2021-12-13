<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideosController extends Controller
{
    //

    public function index()
    {
      $data = Video.all()
      return view('videos/index',['videos' => $data]);
    }
}
