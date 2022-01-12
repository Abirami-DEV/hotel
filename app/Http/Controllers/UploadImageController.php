<?php
 
namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Photo;
use Illuminate\Http\Request;

class UploadImageController extends Controller
{
    public function index()
    {
        return view('image');
    }
 
    public function save(Request $request)
    {
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
         ]);
        $name = $request->file('image')->getClientOriginalName();
        $path = explode('/',$request->file('image')->store('public/images'));
        $path = 'storage/'.$path[1].'/'.$path[2];
        // $photo = new Photo;
        // $photo->name = $name;
        // $photo->path = $path;
        // $photo->save();
        $photo = Photo::create([
            'name' => $name,
            'path' => $path,
           ]);
        return view('show', compact('photo'))->with('status', 'Image Has been uploaded');
    }

    public function show() 
    {
        $photo = Photo::find(8);
        return view('show', compact('photo'));
    }
}
