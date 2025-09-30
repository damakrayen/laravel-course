@extends('layoutT')
@section('content')
<h1>Edit Connection  </h1>
<div class="container my-5">
<form method="Post" action="{{route('tournois.update',['tournoi'=>$tournoi->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group "><label for="nom">Cloud Provider Name</label>
        <input class="form-control" name=nom id="nom" type="text" value="{{old('nom',$tournoi->nom)}}"></div>
        <div><label for="localisation">Startup Name</label>
            <input class="form-control" name="localisation" id="localisation" type="text" value="{{old('localisation',$tournoi->localisation)}}"></div>
        <div  ><label for="date">Subscription Expiration Date </label>
            <input class="form-control" name="date" id="date" type="text" value="{{old('date',$tournoi->date)}}"></div>
        <div><label for="frais">Phone Number</label>
                <input class="form-control" name="frais" id="frais" type="text" value="{{old('frais',$tournoi->frais)}}"></div>
        <div><label for="prix">API Key </label>
            <input class="form-control" name="prix" id="prix" type="text" value="{{old('prix',$tournoi->prix)}}"></div>
        <div><label for="nombrejoueurs">Account Id</label>
                <input class="form-control" name="nombrejoueurs" id="nombrejoueurs" type="text" value="{{old('nombrejoueurs',$tournoi->nombrejoueurs)}}"></div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
        <div class="d-flex justify-content-center mt-3">
        <button class="btn btn-block btn-warning" type="submit"> Update Connection </button>
        </div>
</form>
</div>

@endsection