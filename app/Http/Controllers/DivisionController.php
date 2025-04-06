<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function divisi(){
        $divisions = Division::all();

        return view('divisi', ['divisions' => $divisions]);
    }

    public function visi(){
        return view('visi');
    }

    public function misi(){
        return view('misi');
    }

    public function showDivision(Division $division){
        return view('showDivisi', ['division' => $division]);
    }

    public function showAddDivision(){
        return view('addDivision');
    }

    public function addDivision(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:225',
            'description' => 'required|string|min:20|max:2000',
            // 'image' => 'required|image|max:2048',
        ]);
        // $path = $request->file('image')->store('divisions', 'public');
        Division::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            // 'image' => $path, 
        ]);
        return redirect()->route('divisi');
    }
}
