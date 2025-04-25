<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info()
    {
        $infos = Info::orderBy('created_at', 'desc')->paginate(5);
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
            'content' => 'required|string|min:20',
        ]);
        $data = [
            'title' => $request->title,
            'content' => $request->content,
        ];

        Info::create($data);
        return redirect()->route('info');
    }
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('berita-ckeditor/' . date('Y/m/d'), $filename, 'public'); // bebas, bisa folder lain

            return response()->json([
                'url' => asset('storage/' . $path),
            ]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }

    public function deleteInfo(Info $info)
    {
        $info->delete();

        return redirect()->route('info');
    }
}
