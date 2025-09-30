<x-app-layout>

    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <div class="d-flex justify-content-between align-items-center px-4 pt-2 pb-4">
                    <h1 class="text-xl font-bold m-0">List of Courts</h1>
                    <a href="{{ route('terrains.create') }}" class="btn btn-primary  ">+</a>
                </div>
                <ul class="list-group">
                    @foreach ($terrains as $terrain)
                        
                    
                    <li class="list-group-item">
                        <h2><a href="{{route('terrains.show',['terrain'=>$terrain->id])}}"> {{$terrain->nom }} </a></h2>
                        <p> Address: {{$terrain->adresse}}</p>
                        <p> Disponibility: {{$terrain->disponibilite}}</p>
                        <p> Phone Number: {{$terrain->contact}}</p>
                        <p> Rent Price:{{$terrain->prix}}</p>
                
                        @auth
                        
                            <a class="btn btn-warning" href="{{ route('terrains.edit', ['terrain' => $terrain->id]) }}">Edit</a>
                            
                            <form style="display: inline" method="POST" action="{{ route('terrains.destroy', ['terrain' => $terrain->id]) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">DELETE</button>
                            </form>
                        
                    @endauth
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>


</x-app-layout>
