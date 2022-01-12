<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index()
    {
      $foods=Food::all();
      return view('index',  compact('foods'));
    }

//   public function create()
//   {
//     return view('create');
//   }

  public function store(StorePostRequest $request)
  {
    $food = Food::create(request()->validated());
    return redirect()->route('foods');
  }
}
