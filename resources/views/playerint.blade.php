<x-app-layout>
    <div class="container mx-auto px-4">
        <br><br>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                <a href="{{ route('terrains.index') }}">
                    <img src="{{ asset('img/courts.jpg') }}" alt="Courts" class="w-full h-40 object-cover rounded-lg mb-4 hover:opacity-80 transition duration-300">
                </a>
                <a href="{{ route('terrains.index') }}" class="text-lg font-semibold text-blue-600">List Of Courts</a>
            </div>
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                <a href="{{ route('posts.index') }}">
                    <img src="{{ asset('img/players.jpg') }}" alt="Players" class="w-full h-40 object-cover rounded-lg mb-4 hover:opacity-80 transition duration-300">
                </a>
                <a href="{{ route('posts.index') }}" class="text-lg font-semibold text-blue-600">List Of Available Players</a>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                <a href="{{ route('tournois.index') }}">
                    <img src="{{ asset('img/m.png') }}" alt="Tournaments" class="w-full h-40 object-cover rounded-lg mb-4 hover:opacity-80 transition duration-300">
                </a>
                <a href="{{ route('tournois.index') }}" class="text-lg font-semibold text-blue-600">List Of Tournaments</a>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                <a href="{{ route('resultats.index') }}">
                    <img src="{{ asset('img/r.png') }}" alt="PostMatch" class="w-full h-40 object-cover rounded-lg mb-4 hover:opacity-80 transition duration-300">
                </a>
                <a href="{{ route('resultats.create') }}" class="text-lg font-semibold text-blue-600">PostMatch Form</a>
            </div>
        </div>
    </div>
</x-app-layout>
