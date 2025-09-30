@extends('layoutC')
@section('content')
<h1>New Court</h1>
<div class="container my-5">
<form method="Post" action="{{route('terrains.store')}}">
    @csrf
    <div class="form-group " ><label for="nom">Court Name </label>
        <input class="form-control" name=nom id="nom" type="text" value="{{old('nom')}}"></div>
    <div><label for="adresse">Court Address</label>
        <input class="form-control" name="adresse" id="adresse" type="text" value="{{old('adresse')}}"></div>
        <div><label for="prix">Rent Price</label>
            <input class="form-control" name="prix" id="prix" type="text" value="{{old('prix')}}"></div>
        <div><label for="contact">Phone Number</label>
            <input class="form-control" name="contact" id="contact" type="text" value="{{old('contact')}}"></div>
    <div><label for="disponibilite">Disponibility</label>
        <input class="form-control" name="disponibilite" id="disponibilite" type="text" value="{{old('disponibilite')}}"></div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
        <div class="d-flex justify-content-center mt-3">
        <button class="btn  btn-primary" type="submit"> Add Court </button>
        </div>
</form>
</div>

@endsection