<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Billing</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
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
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 ">
          <div class="flex">
              <!-- Logo -->
              <div class="shrink-0 flex items-center ">
                  <a href="{{ route('dashboard') }}">
                      <x-application-mark class="block h-9 w-auto" />
                  </a>
              </div>

              <!-- Navigation Links -->
              <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                  <x-nav-link href="{{ route('clientdashboard') }}" :active="request()->routeIs('dashboard')">
                      {{ __('Client Dashboard') }}
                  </x-nav-link>
                  <x-nav-link href="{{ route('upload') }}" :active="request()->routeIs('dashboard')">
                      {{ __('Upload') }}
                  </x-nav-link>
                  <x-nav-link href="{{ route('dataserviceonly') }}" :active="request()->routeIs('dashboard')">
                      {{ __('Data Service Only ') }}
                  </x-nav-link>

                  <x-nav-link href="{{ route('pricing') }}" :active="request()->routeIs('dashboard')">
                      {{ __('Full Subscription ') }}
                  </x-nav-link>
                  <x-nav-link href="{{ route('billing') }}" :active="request()->routeIs('dashboard')">
                      {{ __('Billing') }}
                  </x-nav-link>

                  <x-nav-link href="{{ route('apropos') }}" :active="request()->routeIs('dashboard')">
                      {{ __('About us') }}
                  </x-nav-link>
                  <x-nav-link href="{{ route('faqs') }}" :active="request()->routeIs('dashboard')">
                      {{ __('FAQs') }}
                  </x-nav-link>

              </div>
          </div>

          <div class="hidden sm:flex sm:items-center sm:ms-6">
              <!-- Teams Dropdown -->
              @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                  <div class="ms-3 relative">
                      <x-dropdown align="right" width="60">
                          <x-slot name="trigger">
                              <span class="inline-flex rounded-md">
                                  <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                      {{ Auth::user()->currentTeam->name }}

                                      <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                      </svg>
                                  </button>
                              </span>
                          </x-slot>

                          <x-slot name="content">
                              <div class="w-60">
                                  <!-- Team Management -->
                                  <div class="block px-4 py-2 text-xs text-gray-400">
                                      {{ __('Manage Team') }}
                                  </div>

                                  <!-- Team Settings -->
                                  <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                      {{ __('Team Settings') }}
                                  </x-dropdown-link>

                                  @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                      <x-dropdown-link href="{{ route('teams.create') }}">
                                          {{ __('Create New Team') }}
                                      </x-dropdown-link>
                                  @endcan

                                  <!-- Team Switcher -->
                                  @if (Auth::user()->allTeams()->count() > 1)
                                      <div class="border-t border-gray-200"></div>

                                      <div class="block px-4 py-2 text-xs text-gray-400">
                                          {{ __('Switch Teams') }}
                                      </div>

                                      @foreach (Auth::user()->allTeams() as $team)
                                          <x-switchable-team :team="$team" />
                                      @endforeach
                                  @endif
                              </div>
                          </x-slot>
                      </x-dropdown>
                  </div>
              @endif

              <!-- Settings Dropdown -->
              <div class="ms-3 relative">
                  <x-dropdown align="right" width="48">
                      <x-slot name="trigger">
                          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                              <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                  <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                              </button>
                          @else
                              <span class="inline-flex rounded-md">
                                  <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                      {{ Auth::user()->name }}

                                      <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                      </svg>
                                  </button>
                              </span>
                          @endif
                      </x-slot>

                      <x-slot name="content">
                          <!-- Account Management -->
                          <div class="block px-4 py-2 text-xs text-gray-400">
                              {{ __('Manage Account') }}
                          </div>

                          <x-dropdown-link href="{{ route('profile.show') }}">
                              {{ __('Profile') }}
                          </x-dropdown-link>

                          @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                              <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                  {{ __('API Tokens') }}
                              </x-dropdown-link>
                          @endif

                          <div class="border-t border-gray-200"></div>

                          <!-- Authentication -->
                          <form method="POST" action="{{ route('logout') }}" x-data>
                              @csrf

                              <x-dropdown-link href="{{ route('logout') }}"
                                       @click.prevent="$root.submit();">
                                  {{ __('Log Out') }}
                              </x-dropdown-link>
                          </form>
                      </x-slot>
                  </x-dropdown>
              </div>
          </div>

          <!-- Hamburger -->
          <div class="-me-2 flex items-center sm:hidden">
              <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                  <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                      <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>
          </div>
      </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
      <div class="pt-2 pb-3 space-y-1">
          <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
              {{ __('Dashboard') }}
          </x-responsive-nav-link>
      </div>

      <!-- Responsive Settings Options -->
      <div class="pt-4 pb-1 border-t border-gray-200">
          <div class="flex items-center px-4">
              @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                  <div class="shrink-0 me-3">
                      <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                  </div>
              @endif

              <div>
                  <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                  <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
              </div>
          </div>

          <div class="mt-3 space-y-1">
              <!-- Account Management -->
              <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                  {{ __('Profile') }}
              </x-responsive-nav-link>

              @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                  <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                      {{ __('API Tokens') }}
                  </x-responsive-nav-link>
              @endif

              <!-- Authentication -->
              <form method="POST" action="{{ route('logout') }}" x-data>
                  @csrf

                  <x-responsive-nav-link href="{{ route('logout') }}"
                                 @click.prevent="$root.submit();">
                      {{ __('Log Out') }}
                  </x-responsive-nav-link>
              </form>

              <!-- Team Management -->
              @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                  <div class="border-t border-gray-200"></div>

                  <div class="block px-4 py-2 text-xs text-gray-400">
                      {{ __('Manage Team') }}
                  </div>

                  <!-- Team Settings -->
                  <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                      {{ __('Team Settings') }}
                  </x-responsive-nav-link>

                  @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                      <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                          {{ __('Create New Team') }}
                      </x-responsive-nav-link>
                  @endcan

                  <!-- Team Switcher -->
                  @if (Auth::user()->allTeams()->count() > 1)
                      <div class="border-t border-gray-200"></div>

                      <div class="block px-4 py-2 text-xs text-gray-400">
                          {{ __('Switch Teams') }}
                      </div>

                      @foreach (Auth::user()->allTeams() as $team)
                          <x-switchable-team :team="$team" component="responsive-nav-link" />
                      @endforeach
                  @endif
              @endif
          </div>
      </div>
  </div>
</nav>

    <br> <br> <br>
    <!-- Page Content -->  

<body class="bg-gray-50 text-gray-900">

    <div class="max-w-6xl mx-auto p-6 space-y-6">
    
      <!-- Header -->
      <div class="flex items-center justify-between">
        <div>
          <h2 class="text-2xl font-bold">Billing & Subscription</h2>
          <p class="text-gray-500">Manage your subscription and billing information</p>
        </div>
        
      </div>
    
      <!-- Tabs -->
      <div>
        <div class="grid grid-cols-3 border-b">
          <button class="tab-trigger px-4 py-2 font-medium border-b-2 border-indigo-600" data-tab="overview">Overview</button>
          <button class="tab-trigger px-4 py-2 text-gray-500 hover:text-gray-800" data-tab="usage">Usage</button>
          <button class="tab-trigger px-4 py-2 text-gray-500 hover:text-gray-800" data-tab="invoices">Invoices</button>
        </div>
    
        <!-- Overview -->
        <div class="tab-content space-y-6 mt-6" id="overview">
          <div class="grid gap-6 md:grid-cols-2">
            <!-- Current Plan -->
            <div class="border rounded-lg bg-white shadow p-6 space-y-4">
              <h3 class="text-lg font-semibold flex items-center gap-2">💳 Current Plan</h3>
              <p class="text-gray-500">Your active subscription details</p>
              <div class="flex items-center justify-between">
                <span class="text-2xl font-bold">Professional</span>
                <span class="px-2 py-1 bg-gray-200 rounded text-sm">Active</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-gray-500">Price</span>
                <span class="font-medium">$TND 9.99/monthly</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-gray-500">Next billing</span>
                <span class="font-medium">2025-10-15</span>
              </div>
              <div class="pt-4 space-y-2">
                <button class="w-full px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Upgrade Plan</button>
                <button class="w-full px-4 py-2 border rounded hover:bg-gray-50">Change Billing Cycle</button>
              </div>
            </div>
    
            <!-- Payment Method -->
            <div class="border rounded-lg bg-white shadow p-6 space-y-4">
              <h3 class="text-lg font-semibold flex items-center gap-2">📅 Payment Method</h3>
              <p class="text-gray-500">Your default payment information</p>
              <div class="flex items-center space-x-3">
                <div class="w-12 h-8 bg-indigo-100 rounded flex items-center justify-center">💳</div>
                <div>
                  <div class="font-medium">•••• •••• •••• 4242</div>
                  <div class="text-sm text-gray-500">Expires 12/26</div>
                </div>
              </div>
              <div class="pt-4 space-y-2">
                <button class="w-full px-4 py-2 border rounded hover:bg-gray-50">Update Card</button>
                <button class="w-full px-4 py-2 border rounded hover:bg-gray-50">Add Payment Method</button>
              </div>
            </div>
          </div>
          <!-- Cash Payment Method Card -->
    <div class="border rounded-lg bg-white shadow p-6">
        <div class="flex items-center space-x-2 mb-2">
          <span class="text-lg">💵</span>
          <h3 class="text-lg font-semibold">Cash Payment</h3>
        </div>
        <p class="text-gray-500 mb-4">Pay directly in cash at our office or at partner locations.</p>
      
        <div class="flex flex-col space-y-3">
          <div class="flex items-center space-x-3 p-3 border border-dashed rounded-lg bg-yellow-50">
            <div class="w-12 h-8 bg-yellow-100 rounded flex items-center justify-center">💵</div>
            <div>
              <div class="font-medium">Cash Payment Option</div>
              <div class="text-sm text-gray-500">No card required, pay in person</div>
            </div>
          </div>
      
          <button class="w-full px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600">
            Select Cash Payment
          </button>
        </div>
      </div>
      
    
          <!-- Usage quick overview -->
          <div class="border rounded-lg bg-white shadow p-6">
            <h3 class="text-lg font-semibold">Quick Usage Overview</h3>
            <p class="text-gray-500 mb-4">Your current usage across key metrics</p>
            <div class="grid gap-4 md:grid-cols-2">
              <div>
                <div class="flex justify-between text-sm">
                  <span class="text-gray-500">Storage</span>
                  <span class="font-medium">245 / 500 GB</span>
                </div>
                <div class="w-full bg-gray-200 h-2 rounded">
                  <div class="bg-indigo-600 h-2 rounded" style="width: 49%"></div>
                </div>
              </div>
              
                
                
            </div>
          </div>
        </div>
    
        <!-- Usage -->
        <div class="tab-content hidden mt-6" id="usage">
          <div class="grid gap-4 md:grid-cols-2">
            <!-- Example usage card -->
            <div class="border rounded-lg bg-white shadow p-6">
              <h3 class="text-lg font-semibold">Storage</h3>
              <p class="text-gray-500">245 of 500 GB used</p>
              <div class="w-full bg-gray-200 h-3 rounded my-2">
                <div class="bg-indigo-600 h-3 rounded" style="width: 49%"></div>
              </div>
              <div class="flex justify-between text-sm text-gray-500">
                <span>49% used</span>
                <span>255 GB remaining</span>
              </div>
            </div>
            <!-- Repeat for API Calls, Team Members, Classifications -->
          </div>
        </div>
    
        <!-- Invoices -->
        <div class="tab-content hidden mt-6" id="invoices">
          <div class="border rounded-lg bg-white shadow p-6">
            <h3 class="text-lg font-semibold">Invoice History</h3>
            <p class="text-gray-500 mb-4"> View your past invoices</p>
            <div class="space-y-4">
              <div class="flex items-center justify-between p-4 bg-gray-50 rounded">
                <div>
                  <div class="font-medium">INV-2024-001</div>
                  <div class="text-sm text-gray-500">Professional Plan - October 2025</div>
                </div>
                <div class="flex items-center gap-4">
                  <div class="text-right">
                    <div class="font-medium">TND 39.99</div>
                    <div class="text-sm text-gray-500">2025-10-15</div>
                  </div>
                  <span class="px-2 py-1 bg-green-100 text-green-700 rounded text-sm">Paid</span>
                </div>
              </div>
              <!-- Repeat for other invoices -->
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script>
      const triggers = document.querySelectorAll(".tab-trigger");
      const contents = document.querySelectorAll(".tab-content");
      triggers.forEach(btn => {
        btn.addEventListener("click", () => {
          triggers.forEach(t => t.classList.remove("border-indigo-600","text-gray-900"));
          btn.classList.add("border-indigo-600","text-gray-900");
          const tab = btn.dataset.tab;
          contents.forEach(c => c.classList.add("hidden"));
          document.getElementById(tab).classList.remove("hidden");
        });
      });
    </script>
    
    </body>
    <br><br>
   
    <br><br>
    <br><br>
   

   
    <br><br>
   



    <footer class="footer">
      <div class="footer-content">
        <div class="footer-left">
          <span class="contact-text">
            <strong>Email:</strong> contact@ONECLOUDIUM.com<br />
            <strong>phone:</strong> +21622005970<br>
            <strong>Address:</strong>  Republic Street, Sfax, Tunisia
          </span>
        </div>
        <div class="footer-center">
          <span class="footer-text">
            &copy; 2025 ONE CLUDIUM. ALL RIGHTS RESERVED.
          </span>
        </div>
        <div class="footer-right">
          <strong>FOLLOW US:</strong><br /> 
          <a href="https://www.linkedin.com/in/one-cloudium-433b33386/" target="_blank" aria-label="Instagram">
            <img src="\img\linkedin.png" alt="Instagram" />
          </a>
          <a href="https://www.facebook.com/profile.php?id=61581242713349" target="_blank" aria-label="Facebook">
            <img src="\img\f2.png" alt="Facebook" />
          </a>
          

          
        </div>
      </div>
    </footer>
</html>
