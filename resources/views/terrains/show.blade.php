@extends('layoutC')
@section('content')

<h2> {{$terrain->nom }}</h2>
<p> {{$terrain->adresse}}</p>
<p> {{$terrain->contact}}</p>
<p> {{$terrain->disponibilite}}</p>
<p> {{$terrain->prix}}</p>
<em>{{$terrain->created_at}}</em>


@endsection