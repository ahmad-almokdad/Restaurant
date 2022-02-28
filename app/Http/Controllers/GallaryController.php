<?php

namespace App\Http\Controllers;

use App\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {
      $images = Gallary::all();
      return view('gallary',compact('images'));
    }
}
