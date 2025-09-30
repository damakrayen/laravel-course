<?php

namespace App\Http\Controllers;
use App\Models\Tournoi;
use Illuminate\Http\Request;

class TournoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tournois.index',['tournois'=>Tournoi::all()]);
        //
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tournois.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only(['nom','localisation','date','frais','prix','nombrejoueurs']);
        $post = Tournoi::create($data);
        
        


 
        return redirect()->route('upload')->with('success', 'Connection established.');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tournoi = Tournoi::findOrFail($id); 
        return view('tournois.show', ['tournoi' => $tournoi]); 
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post= Tournoi::findOrFail($id);
        return view('tournois.edit',['tournoi'=>$post]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post=Tournoi::findOrFail($id);
        $post->nom=$request->input('nom');
        $post->localisation=$request->input('localisation');
        $post->date=$request->input('date');
        $post->frais=$request->input('frais');
        $post->prix=$request->input('prix');
        $post->nombrejoueurs=$request->input('nombrejoueurs');
        $post->save();
        session()->flash('status','Tpurnament was updated!!');
        return redirect()->route('tournois.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Tournoi::findOrFail($id);
        $post->delete();
        session()->flash('status','Tournament was deleted');
        return redirect()->route('tournois.index');
        //
    }
}
