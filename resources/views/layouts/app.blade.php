<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <style>
            .footer {
    background-color: #C5C6D0;
    color: #fff;
    
    padding: 1rem 2rem;
    text-align: center;
    
  }
  
  .footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
   
  }
  
  
  .footer-left {
    font-size: 0.9rem;
    line-height: 1.5;
  }
  
  .footer-right {
    display: flex;
    gap: 1rem;
  }
  
  .footer-right a img {
    width: 24px;
    height: 24px;
    filter: brightness(0) invert(1); /* Makes icons white if they're dark */
  }
  
        </style>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <script defer src="app.js"></script>
        
 
        
        

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/css/theme.css'])
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
