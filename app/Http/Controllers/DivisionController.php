<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function divisi(){
        $divisions = Division::orderBy('id')->get();

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

    public function deleteDivision(Division $division){
        $division->delete();

        return redirect()->route('divisi');
    }

    public function showEditDivision(Division $division){
        return view('editDivision', ['division'=>$division]);
    }

    public function editDivision(Request $request, Division $division){
        $request->validate([
            'name' => 'required|string|max:225',
            'description' => 'required|string|min:20|max:2000',
        ]);

        $divisi = Division::findOrFail($division->id);
        $divisi->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('divisi')->with('success', 'Divisi berhasil diperbarui!');
    }
}
