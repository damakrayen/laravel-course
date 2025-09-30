<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="text-xl font-bold">List of APIs</h1>
                    <a href="{{ route('tournois.create') }}" class="btn btn-primary">+</a>

                </div>

                <ul class="list-group">
                    @foreach ($tournois as $tournoi)
                        <li class="list-group-item">
                            <h2><a href="{{ route('tournois.show', ['tournoi' => $tournoi->id]) }}">{{ $tournoi->nom }}</a></h2>
                            <p>Startup Name : {{ $tournoi->localisation }}</p>
                            <p>Subscription Expiration Date : {{ $tournoi->date }}</p>
                            <p>Phone Number : {{ $tournoi->frais }}</p>
                            <p>API Key : {{ $tournoi->prix }}</p>
                            <p>Account Id : {{ $tournoi->nombrejoueurs }}</p>
                            
                            @auth
                                @if(auth()->user()->role === 'admin')
                                    <a class="btn btn-warning" href="{{ route('tournois.edit', ['tournoi' => $tournoi->id]) }}">Edit</a>
                                    <form style="display: inline" method="POST" action="{{ route('tournois.destroy', ['tournoi' => $tournoi->id]) }}">
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
