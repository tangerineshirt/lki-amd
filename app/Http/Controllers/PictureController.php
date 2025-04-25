<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function showAddPicture(){
        return view('addPicture');
    }

    public function addPicture(Request $request){
        $request->validate([
            'image1' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'image2' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'image3' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'image4' => "required|image|mimes:jpeg,png,jpg|max:2048",
            'image5' => "required|image|mimes:jpeg,png,jpg|max:2048",
        ]);

        foreach(['image1', 'image2', 'image3', 'image4', 'image5'] as $imgField){
            if($request->hasFile($imgField)){
                $data[$imgField] = $request->file($imgField)->store('pictures', 'public');
            }
        }
        Picture::create($data);

        return redirect()->route('home');
    }

    public function home(){
        $picture = Picture::latest()->first();
        return view('welcome', ['picture' => $picture]);
    }
}
