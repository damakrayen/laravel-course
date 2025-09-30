@extends('layoutC')
@section('content')
<h1>Edit Court </h1>
<div class="container my-5">
<form method="Post" action="{{route('terrains.update',['terrain'=>$terrain->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group "><label for="nom">Court Name</label>
        <input class="form-control" name=nom id="nom" type="text" value="{{old('nom',$terrain->nom)}}"></div>
    <div class="form-group "><label for="adresse">Court Address</label>
        <input class="form-control" name="adresse" id="adresse" type="text" value="{{old('adresse',$terrain->adresse)}}"></div>
    <div><label for="prix">Rent Price</label>
        <input class="form-control" name="prix" id="prix" type="text" value="{{old('prix',$terrain->prix)}}"></div>
    <div><label for="contact">Phone Number</label>
        <input class="form-control" name="contact" id="contact" type="text" value="{{old('contact',$terrain->contact)}}"></div>
    <div><label for="disponibilite">Disponibility</label>
        <input class="form-control" name="disponibilite" id="disponibilite" type="text" value="{{old('disponibilite',$terrain->disponibilite)}}"></div>        
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
        <div class="d-flex justify-content-center mt-3">
        <button class="btn btn-block btn-warning" type="submit"> Update Court </button>
        </div>
</form>
</div>

@endsection