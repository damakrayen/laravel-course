@extends('layoutH')
@section('content')
@php
    $backgroundImageUrl = asset('images/background2.jpeg'); 
@endphp

<style>
    body {
        background-image: url('{{ $backgroundImageUrl }}');
        background-size: cover;
        
        background-repeat: no-repeat;
    }
</style>
<br>
<br>
<br>
<h1><strong>{{ "TENNIS HUB"}}</strong> </h1>
<br>



<br><br>


<p><strong>{{ "It's match time ! 🎾 "}}</strong></p> <br>

<p><strong>{{ "The first application that will allow you to live your passion in real life 😎 "}}</strong></p>

<br>



@endsection