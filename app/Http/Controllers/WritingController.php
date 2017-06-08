<?php

namespace App\Http\Controllers;

use App\Models\Writing;
use Illuminate\Http\Request;

class WritingController extends Controller
{
  public function index()
  {
    $items = Writing::latestFirst()->get();
    return view('writing.index')->with([
      'items' => $items,
    ]);
  }

  public function show(Writing $writing)
  {
    return view('writing.item')->with([
      'item' => $writing,
    ]);
  }
}
