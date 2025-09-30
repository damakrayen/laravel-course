<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terrain;
use Illuminate\Support\Str;

class TerrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('terrains.index',['terrains'=>Terrain::all()]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('terrains.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->only(['nom','adresse','prix','contact','disponibilite']);
        

        $terrain = Terrain::create($data);


 
        return redirect()->route('terrains.index');
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $terrain = Terrain::findOrFail($id); 
        return view('terrains.show', ['terrain' => $terrain]); 
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $terrain= Terrain::findOrFail($id);
        return view('terrains.edit',['terrain'=>$terrain]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $terrain=Terrain::findOrFail($id);
        $terrain->nom=$request->input('nom');
        $terrain->adresse=$request->input('adresse');
        $terrain->prix=$request->input('prix');
        $terrain->contact=$request->input('contact');
        $terrain->disponibilite=$request->input('disponibilite');
        $terrain->save();
        session()->flash('status','Court was updated!!');
        return redirect()->route('terrains.index');
        //
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $terrain=Terrain::findOrFail($id);
        $terrain->delete();
        session()->flash('status','Court was deleted');
        return redirect()->route('terrains.index');
        //
    }
}
