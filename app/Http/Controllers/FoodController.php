<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Jobs\TwoMinuteTimer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FoodController extends Controller
{
    public function index()
    {
      // dispatch(new TwoMinuteTimer('Alo alo alo'));
      $foods=Food::all();
      return view('index',  compact('foods'));
    }

  public function create()
  {
    return view('create');
  }

  public function store()
  {
    $food = Food::create(request()->all());
    if ($food!=null) {
     Log::info('Food created with id '.$food->id);
    }
    return redirect()->route('foods');
  }
}
