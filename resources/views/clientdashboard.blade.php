<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Client's Dashboard</title>
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

    <!-- Page Content -->    
    <body class="bg-gray-50 text-gray-900">
        <div class="space-y-6 p-6">
          <!-- Header -->
          <div class="flex items-center justify-between">
            <div>
              <h1 class="text-3xl font-bold">Here's what's happening with your data today</h1>
              
            </div>
            <div class="flex space-x-3">
              
              <a
                href="/upload"
                class="flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg"
              >
                ➕ Upload Files
              </a>
            </div>
          </div>
    
          <!-- Quick Stats -->
          <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
            <div class="border rounded-lg p-4 shadow-sm">
              <div class="flex items-center justify-between">
                <span class="text-sm font-medium">Total Files</span>
                📄
              </div>
              <div class="text-2xl font-bold">5,247</div>
              <p class="text-xs text-gray-500">
                <span class="text-green-600">+12%</span> from last month
              </p>
            </div>
            <div class="border rounded-lg p-4 shadow-sm">
              <div class="flex items-center justify-between">
                <span class="text-sm font-medium">Storage Used</span>
                💾
              </div>
              <div class="text-2xl font-bold">245 GB</div>
              <p class="text-xs text-gray-500">
                <span class="text-green-600">+8%</span> from last month
              </p>
            </div>
            
            
          </div>
    
          <div class="grid gap-6 lg:grid-cols-3">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-6">
              <!-- Storage Usage -->
    <div class="border rounded-lg shadow-sm">
        <div class="p-4 border-b">
          <h2 class="font-semibold">Storage Usage</h2>
          <p class="text-sm text-gray-500">
            Your current storage consumption by category
          </p>
        </div>
        <div class="p-4 space-y-4">
          <!-- Customer Data -->
          <div>
            <div class="flex justify-between text-sm mb-1">
              <span class="flex items-center space-x-2">
                <span class="w-3 h-3 bg-blue-500 rounded"></span>
                <span>Customer Data</span>
              </span>
              <span class="text-gray-500">89 GB / 500 GB</span>
            </div>
            <div class="w-full h-2 bg-gray-200 rounded">
              <div class="h-2 bg-blue-500 rounded" style="width: 18%"></div>
            </div>
          </div>
      
          <!-- Financial Records -->
          <div>
            <div class="flex justify-between text-sm mb-1">
              <span class="flex items-center space-x-2">
                <span class="w-3 h-3 bg-green-500 rounded"></span>
                <span>Financial Records</span>
              </span>
              <span class="text-gray-500">67 GB / 500 GB</span>
            </div>
            <div class="w-full h-2 bg-gray-200 rounded">
              <div class="h-2 bg-green-500 rounded" style="width: 13%"></div>
            </div>
          </div>
      
          <!-- Media Files -->
          <div>
            <div class="flex justify-between text-sm mb-1">
              <span class="flex items-center space-x-2">
                <span class="w-3 h-3 bg-orange-500 rounded"></span>
                <span>Media Files</span>
              </span>
              <span class="text-gray-500">45 GB / 500 GB</span>
            </div>
            <div class="w-full h-2 bg-gray-200 rounded">
              <div class="h-2 bg-orange-500 rounded" style="width: 9%"></div>
            </div>
          </div>
      
          <!-- Documents -->
          <div>
            <div class="flex justify-between text-sm mb-1">
              <span class="flex items-center space-x-2">
                <span class="w-3 h-3 bg-purple-500 rounded"></span>
                <span>Documents</span>
              </span>
              <span class="text-gray-500">32 GB / 500 GB</span>
            </div>
            <div class="w-full h-2 bg-gray-200 rounded">
              <div class="h-2 bg-purple-500 rounded" style="width: 6.4%"></div>
            </div>
          </div>
      
          <!-- Archives -->
          <div>
            <div class="flex justify-between text-sm mb-1">
              <span class="flex items-center space-x-2">
                <span class="w-3 h-3 bg-gray-500 rounded"></span>
                <span>Archives</span>
              </span>
              <span class="text-gray-500">12 GB / 500 GB</span>
            </div>
            <div class="w-full h-2 bg-gray-200 rounded">
              <div class="h-2 bg-gray-500 rounded" style="width: 2.4%"></div>
            </div>
          </div>
      
          <!-- Total -->
          <div class="pt-4 border-t">
            <div class="flex justify-between text-sm">
              <span class="text-gray-500">Total Used</span>
              <span class="font-medium">245 GB / 500 GB</span>
            </div>
            <div class="w-full h-2 bg-gray-200 rounded mt-2">
              <div class="h-2 bg-blue-600 rounded" style="width: 49%"></div>
            </div>
          </div>
        </div>
      </div>
      
              <!-- Classification Analytics -->
              <div class="border rounded-lg shadow-sm">
                <div class="p-4 border-b">
                  <h2 class="font-semibold">Classification Analytics</h2>
                  <p class="text-sm text-gray-500">
                    AI classification performance over the last 30 days
                  </p>
                </div>
                <div class="h-64 flex items-center justify-center text-gray-400">
                  <div class="text-center">
                    📊
                    <p>Analytics chart would appear here</p>
                    <p class="text-sm">Showing classification trends and accuracy metrics</p>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Right Column -->
            <div class="space-y-6">
              <!-- Recent Activity -->
              <div class="border rounded-lg shadow-sm">
                <div class="p-4 border-b">
                  <h2 class="flex items-center space-x-2 font-semibold">⚡ Recent Activity</h2>
                  <p class="text-sm text-gray-500">Latest actions in your account</p>
                </div>
                <div class="p-4 space-y-4">
                  <div class="flex items-start space-x-3">
                    <span>⬆️</span>
                    <div>
                      <p class="text-sm">Uploaded 15 files to Customer Data</p>
                      <p class="text-xs text-gray-500">2 minutes ago <span class="ml-2 bg-green-100 text-green-600 px-2 rounded text-xs">success</span></p>
                    </div>
                  </div>

                </div>
              </div>
    
              <!-- Security Status -->
              <div class="border rounded-lg shadow-sm p-4">
                <h2 class="flex items-center space-x-2 font-semibold">🔒 Security Status</h2>
                <p class="text-sm text-gray-500 mb-4">Your account security overview</p>
                <div class="flex justify-between text-sm mb-2">
                  <span>Two-Factor Authentication</span>
                  <span class="bg-gray-200 px-2 rounded">Enabled</span>
                </div>
                <div class="flex justify-between text-sm mb-2">
                  <span>Encryption Status</span>
                  <span class="bg-gray-200 px-2 rounded">Active</span>
                </div>
                <div class="flex justify-between text-sm mb-2">
                  <span>Last Security Scan</span>
                  <span class="text-gray-500">2 hours ago</span>
                </div>
                <div class="flex justify-between text-sm">
                  <span>Compliance Score</span>
                  <span class="bg-gray-100 px-2 rounded">98%</span>
                </div>
              </div>
    
              <!-- Quick Actions -->
              <div class="border rounded-lg shadow-sm p-4">
                <h2 class="flex items-center space-x-2 font-semibold">📈 Quick Actions</h2>
                <div class="space-y-2 mt-3">
                  <a href="/upload" class="block px-4 py-2 border rounded-lg text-left">⬆️ Upload New Files</a>
                  <a href="/pricing" class="block px-4 py-2 border rounded-lg text-left">🧠 Change Plan</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
  
<br><br>
   
    <br><br>
    <br><br>
   

   
    <br><br><br><br>
   
   
     
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