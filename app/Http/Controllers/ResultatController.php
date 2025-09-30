<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resultat;

class ResultatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('resultats.index',['resultats'=>Resultat::all()]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('resultats.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only(['joueur1','joueur2','gagnant','date','resultat']);
        
        

        $post = Resultat::create($data);
        return redirect()->route('resultats.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $resultat = Resultat::findOrFail($id); 
        return view('resultats.show', ['resultat' => $resultat]); 
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $resultat= Resultat::findOrFail($id);
        return view('resultats.edit',['resultat'=>$resultat]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post=Resultat::findOrFail($id);
        $post->joueur1=$request->input('joueur1');
        $post->joueur2=$request->input('joueur2');
        $post->date=$request->input('date');
        $post->gagnant=$request->input('gagnant');
        $post->resultat=$request->input('resultat');

        $post->save();
        session()->flash('status','Result was updated!!');
        return redirect()->route('resultats.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post=Resultat::findOrFail($id);
        $post->delete();
        session()->flash('status','Result was deleted');
        return redirect()->route('resultats.index');
        //
    }
}
