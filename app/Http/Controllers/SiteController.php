<?php

namespace App\Http\Controllers;

use App\Models\{Post,Portfolio};
use Illuminate\Http\Request;

class SiteController extends Controller
{
  public function index()
  {
    return view('home')->with([
      'feature' => Portfolio::where('featured', 1)->first(),
      'items' => Portfolio::where('featured', 0)->latestFirst()->limit(6)->get(),
    ]);
  }

  public function about()
  {
    return view('about');
  }
}
