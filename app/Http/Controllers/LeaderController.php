<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Leader;
use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function pengurus(){
        $leaders = Leader::orderBy('id')->get();
        $intiLeaders = $leaders->where('rank', 'Inti');
        $harianLeaders = $leaders->where('rank', 'Harian');
        return view('pengurus', ['intiLeaders' => $intiLeaders], ['harianLeaders'=>$harianLeaders]);
    }

    public function showLeader(Leader $leader){
        return view('showLeader', ['leader'=>$leader]);
    }

    public function showAddLeader(){
        $divisions = Division::all();
        return view('addLeader', ['divisions'=>$divisions]);
    }

    public function addLeader(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:225',
            'about' => 'required|string|min:20|max:2000',
            'rank' => 'required|string',
            'position' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        $path = NULL;
        $path = $request->file('image')->store('leaders', 'public');
        Leader::create([
            'name' => $validated['name'],
            'about' => $validated['about'],
            'rank' => $validated['rank'],
            'position' => $validated['position'],
            'image' => $path, 
        ]);

        return redirect()->route('pengurus');
    }

    public function deleteLeader(Leader $leader){
        $leader->delete();

        return redirect()->route('pengurus');
    }
}
