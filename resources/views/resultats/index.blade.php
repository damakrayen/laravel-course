<x-app-layout>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="d-flex justify-content-between align-items-center px-4 pt-2 pb-3">
                    <h1 class="text-xl font-bold m-0">Matchs Played</h1>
                    <a href="{{ route('resultats.create') }}" class="btn btn-primary  ">+</a>
                </div>
                <ul class="list-group">
                    @foreach ($resultats as $resultat)
                        
                    
                    <li class="list-group-item">
                        <h2><a href="{{route('resultats.show',['resultat'=>$resultat->id])}}"> {{$resultat->date }} </a></h2>
                        <p> Player 1 : {{$resultat->joueur1}}</p>
                        <p> Player 2 : {{$resultat->joueur2}}</p>
                        <p> Winner : {{$resultat->gagnant}}</p>
                        <p> Match Result  : {{$resultat->resultat}}</p>
                        @auth
                        @if(auth()->user()->role === 'admin')
                        <a class="btn btn-warning" href="{{route('resultats.edit',['resultat'=>$resultat->id])}}">Edit</a>
                        <form  style="display: inline" method="Post" action="{{route('resultats.destroy',['resultat'=>$resultat->id])}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">DELETE</button>
                
                        </form>
                        @endif
                    @endauth
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


</x-app-layout>