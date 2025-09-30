
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Service Only </title>
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

   
    <body class="bg-gray-50">

        <section class="py-16">
          <div class=" mx-auto px-9 sm:px-6 lg:px-8">
            
            <!-- Title -->
            <div class="text-center mb-12">
              <h2 class="text-3xl font-bold mb-4">Choose OneClouduim, choose peace of mind.</h2>
              <p class="text-xl text-gray-500 mb-8">
                Secure, scalable, and intelligent data storage for every business size
              </p>
        
              <!-- Toggle -->
              <div class="flex items-center justify-center space-x-4">
                <span id="label-monthly" class="text-sm font-medium text-gray-900">Monthly</span>
        
                <label class="relative inline-flex items-center cursor-pointer">
                  <input id="billingToggle" type="checkbox" class="sr-only peer">
                  <div class="w-11 h-6 bg-gray-200 rounded-full peer-checked:bg-indigo-600 transition"></div>
                  <div class="absolute left-1 top-1 w-4 h-4 bg-white rounded-full transition peer-checked:translate-x-5"></div>
                </label>
        
                <span id="label-yearly" class="text-sm text-gray-500">Yearly</span>
                <span class="ml-2 text-xs bg-indigo-100 text-indigo-700 px-2 py-1 rounded">Save up to 20%</span>
              </div>
            </div>
        
            <!-- Pricing Cards -->
            <div id="plans" ></div>
        
            <!-- Custom Solution -->
            <div class="mt-16 text-center">
              <h3 class="text-xl font-semibold mb-4">Need a custom solution?</h3>
              <p class="text-gray-500 mb-6">
                Contact our sales team for enterprise pricing and custom features
              </p>
              <button class="px-6 py-3 border rounded-lg hover:bg-gray-100" onclick="window.location.href='mailto:contact@OneCloudium.com'">Contact Sales Team</button>
            </div>
          </div>
        </section>
        
        <script>
          const plans = [

           
            {
              name: "ALL IN ONE",
              description: "For Maximum Security and Optimised Management",
              monthlyPrice: 29.9,
              yearlyPrice: 299,
              storage: "20 GB Temporary Storage",
              features: [
                "20 GB Temporary Storage",
                "Custom AI models",
                "Data analytics",
                "Data Optimization",
                "Maximal security",
                "Maximal Compression",
                "Enterprise encryption",
                "24/7 dedicated support",
                "Custom integrations",
                "Advanced compliance",

              ],
              popular: false,
              icon: "🔒",
              buttonText: "Subscribe",
              buttonVariant: "secondary",
            },
          ];
        
          const billingToggle = document.getElementById("billingToggle");
          const plansContainer = document.getElementById("plans");
          const monthlyLabel = document.getElementById("label-monthly");
          const yearlyLabel = document.getElementById("label-yearly");
        
          function renderPlans(isYearly) {
            plansContainer.innerHTML = "";
            plans.forEach(plan => {
              const price = isYearly ? plan.yearlyPrice : plan.monthlyPrice;
              const savings = plan.monthlyPrice > 0 ? Math.round(((plan.monthlyPrice * 12 - plan.yearlyPrice) / (plan.monthlyPrice * 12)) * 100) : 0;
        
              const card = document.createElement("div");
              card.className = `relative border rounded-lg bg-white shadow p-6 flex flex-col justify-between ${
                plan.popular ? "ring-2 ring-indigo-500 scale-105" : ""
              }`;
        
              if (plan.popular) {
                card.innerHTML += `
                  <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-indigo-600 text-white px-3 py-1 rounded-full text-xs flex items-center gap-1">⭐ Most Popular</span>
                  </div>
                `;
              }
        
              card.innerHTML += `
                <div class="text-center">
                  <div class="mx-auto mb-4 p-3 bg-indigo-50 rounded-full w-fit text-2xl">${plan.icon}</div>
                  <h3 class="text-2xl font-semibold">${plan.name}</h3>
                  <p class="text-gray-500 mb-4">${plan.description}</p>
                  <div class="mt-4">
                    <div class="flex items-baseline justify-center">
                      <span class="text-4xl font-bold">TND ${price}</span>
                      ${plan.monthlyPrice > 0 ? `<span class="ml-1 text-gray-500">/${isYearly ? "12TB/year" : "1TB/month"}</span>` : ""}
                    </div>
                    ${isYearly && plan.monthlyPrice > 0 ? `<div class="text-sm text-gray-500 mt-1">TND ${Math.round(price/12)}/month billed annually</div>` : ""}
                    ${isYearly && savings > 0 ? `<span class="mt-2 inline-block px-2 py-1 border rounded text-xs">Save ${savings}%</span>` : ""}
                  </div>
                </div>
                <div class="mt-6 flex-1 flex flex-col justify-between">
                  <div class="text-center mb-4">
                    <div class="text-lg font-semibold">${plan.storage}</div>
                    <div class="text-sm text-gray-500">Secure storage</div>
                  </div>
                  <ul class="space-y-2 mb-4 text-left">
                    ${plan.features.map(f => `<li class="flex items-center gap-2"><span class="text-green-500">✔</span><span class="text-sm text-gray-600">${f}</span></li>`).join("")}
                  </ul>
                  <button onclick="window.location.href='/billing'"class="w-full px-4 py-2 rounded-lg ${
                    plan.buttonVariant === "default" ? "bg-indigo-600 text-white hover:bg-indigo-700" :
                    plan.buttonVariant === "outline" ? "border hover:bg-gray-50" :
                    "bg-gray-200 hover:bg-gray-300"
                  }">${plan.buttonText}</button>
                </div>
              `;
        
              plansContainer.appendChild(card);
            });
          }
        
          billingToggle.addEventListener("change", () => {
            const isYearly = billingToggle.checked;
            monthlyLabel.className = `text-sm ${!isYearly ? "font-medium text-gray-900" : "text-gray-500"}`;
            yearlyLabel.className = `text-sm ${isYearly ? "font-medium text-gray-900" : "text-gray-500"}`;
            renderPlans(isYearly);
          });
        
          // Initial render (monthly mode)
          renderPlans(false);
        </script>
        
        </body>
     
  
     
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
   
    
