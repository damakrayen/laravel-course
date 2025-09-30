<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <div class="d-flex justify-content-between align-items-center px-4 pt-2 pb-4">
                    <h1 class="text-xl font-bold m-0">List of Clients</h1>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary  ">+</a>
                </div>
                <ul class="list-group">
                    @foreach ($posts as $post)
                        <li class="list-group-item">
                            <h2><a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a></h2>
                            <p>Client id: {{ $post->content }}</p>
                            <p>Client Plan: {{ $post->slug }}</p>
                            <p>Status: {{ $post->active }}</p>
                            @auth
                                @if(auth()->user()->role === 'admin')
                                <a class="btn btn-warning" href="{{route('posts.edit',['post'=>$post->id])}}">Edit</a>
                                <form  style="display: inline" method="Post" action="{{route('posts.destroy',['post'=>$post->id])}}">
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
