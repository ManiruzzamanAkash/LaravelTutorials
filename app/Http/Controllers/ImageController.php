<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function create()
    {
        $images = Image::all();
      return view('welcome')->with('images', $images);
    }
    public function store(Request $request)
    {
      $this->validate($request, [
          'title' => 'required',
          'image' => 'nullable|image',
      ]);

        $image = new Image;
        $image->title = $request->title;

        if ($request->hasFile('image')) {
            //store
            $image->image = $request->image->store('public/images');
        }
        $image->save();
        return redirect()->route('create');
    }
}
