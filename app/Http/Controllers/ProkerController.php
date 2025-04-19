<?php

namespace App\Http\Controllers;
use App\Models\Proker;
use App\Models\Division;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    public function proker(){
        $divisions = Division::with(['prokers' => function ($query) {
            $query->orderBy('start');
        }])->get();
        return view('proker', ['divisions' => $divisions]);
    }

    public function showProker(Proker $proker){
        return view('showProker', ['proker'=>$proker]);
    }

    public function showAddProker(){
        $divisions = Division::orderBy('id')->get();
        return view('addProker', ['divisions'=>$divisions]);
    }

    public function addProker(Request $request){
        $validated = $request->validate([
            'division_id' => 'required|exists:divisions,id',
            'name' => 'required|string|max:225',
            'description' => 'required|string|min:20|max:2000',
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
            'image' => 'image|max:2048',
        ]);
        $path = $request->file('image')->store('prokers', 'public');
        Proker::create([
            'name' => $validated['name'],
            'division_id' => $validated['division_id'],
            'description' => $validated['description'],
            'start' => $validated['start'],
            'end' => $validated['end'],
            'image' => $path,
        ]);
        return redirect()->route('proker');
    }

    public function deleteProker(Proker $proker){
        $proker->delete();

        return redirect()->route('proker');
    }
}
