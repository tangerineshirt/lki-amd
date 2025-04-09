<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info()
    {
        $infos = Info::orderBy('created_at', 'desc')->get();
        return view('info', ['infos' => $infos]);
    }

    public function showInfo(Info $info)
    {
        return view('showInfo', ['info' => $info]);
    }

    public function showAddInfo()
    {
        return view('addInfo');
    }

    public function addInfo(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:225',
            'content' => 'required|string|min:20|max:2000',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];
        foreach (['image1', 'image2', 'image3'] as $imgField) {
            if ($request->hasFile($imgField)) {
                $data[$imgField] = $request->file($imgField)->store('berita', 'public');
            }
        }

        Info::create($data);
        return redirect()->route('info');
    }

    public function deleteInfo(Info $info){
        $info->delete();

        return redirect()->route('info');
    }
}
