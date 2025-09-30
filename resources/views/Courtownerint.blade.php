<x-app-layout>
    <div class="container mx-auto px-4">
        <br><br><br><br>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('img/k.png') }}" alt="Visualize Courts" class="w-full h-40 object-cover rounded-lg mb-4 hover:opacity-80 transition duration-300">
                </a>
                <a href="{{ route('home') }}" class="text-lg font-semibold text-blue-600">Visualize My Courts</a>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 text-center">
                <a href="{{ route('terrains.index') }}">
                    <img src="{{ asset('img/courts.jpg') }}" alt="Available Courts" class="w-full h-40 object-cover rounded-lg mb-4 hover:opacity-80 transition duration-300">
                </a>
                <a href="{{ route('terrains.index') }}" class="text-lg font-semibold text-blue-600">List Of Available Courts</a>
            </div>
        </div>
    </div>
</x-app-layout>
