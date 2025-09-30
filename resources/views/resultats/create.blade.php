@extends('layoutR')
@section('content')
<h1>Post-Match Form</h1>
<div class="container my-5">
<form method="Post" action="{{route('resultats.store')}}">
    @csrf
    <div class="form-group " ><label for="joueur1">Player 1</label>
        <input class="form-control" name=joueur1 id="joueur1" type="text" value="{{old('joueur1')}}"></div>
    <div><label for="joueur2">Player 2</label>
        <input class="form-control" name="joueur2" id="joueur2" type="text" value="{{old('joueur2')}}"></div>
    <div  ><label for="gagnant"> Winner</label>
        <input class="form-control" name="gagnant" id="gagnant" type="text" value="{{old('gagnant')}}"></div>
    <div><label for="date">Match Date</label>
        <input class="form-control" name="date" id="date" type="text" value="{{old('date')}}"></div>
    <div><label for="resultat">Match Result</label>
        <input class="form-control" name="resultat" id="resultat" type="text" value="{{old('resultat')}}"></div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
        <div class="d-flex justify-content-center mt-3">
        <button class="btn  btn-primary" type="submit"> Add Result </button>
        </div>
</form>
</div>

@endsection