<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
  public function index()
  {
    $items = Portfolio::latestFirst()->get();
    return view('portfolio.index')->with([
      'items' => $items,
    ]);
  }

  public function show(Portfolio $portfolio)
  {
    return view('portfolio.item')->with([
      'item' => $portfolio,
    ]);
  }
}
