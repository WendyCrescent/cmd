<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommissionController extends Controller
{
  public function index()
  {
    return 'Hello, World!';
  }

  public function show($commission)
  {
    return 'Hello, ' . $commission . '!';
  }

  public function order($commission)
  {
    return 'Hello, ' . $commission . ' order!';
  }
}
