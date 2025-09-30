<x-app-layout>
    <br>
<h1 class="text-center text-3xl font-bold" >Nouvelle Réparation</h1>
<div class="container my-5">
<form method="Post" action="{{route('tournois.store')}}">
    @csrf
    <div class="form-group " ><label for="nom">Marque de l'appareil</label>
        <input class="form-control" name=nom id="nom" type="text" value="{{old('nom')}}"></div>
    <div><label for="localisation">Modèle de l'appareil</label>
        <input class="form-control" name="localisation" id="localisation" type="text" value="{{old('localisation')}}"></div>
    <div  ><label for="date">Type de panne </label>
        <input class="form-control" name="date" id="date" type="text" value="{{old('date')}}"></div>
    <div><label for="frais">Prix à estimer</label>
            <input class="form-control" name="frais" id="frais" type="text" value="{{old('frais')}}"></div>
    <div><label for="prix">code de réparation </label>
        <input class="form-control" name="prix" id="prix" type="text" value="{{old('prix')}}"></div>
    <div><label for="nombrejoueurs">Numéro de telephone joignable</label>
            <input class="form-control" name="nombrejoueurs" id="nombrejoueurs" type="text" value="{{old('nombrejoueurs')}}"></div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
        <div class="d-flex justify-content-center mt-3">
            <button class="btn  btn-primary" type="submit"> Confirmer </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="{{route('dashboard')}}">Retourner</a>
        
        </div>
</form>
</div>
</x-app-layout>

