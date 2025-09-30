
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{('Admin Dashboard')}}
        </h2>
        
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ 'List of Connections' }}
                    <br><br>
                    <a href="{{ route('tournois.index') }}" class="btn btn-primary ml-2">View Connection</a>
                </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="py-12">
        <div class="max-w-7xl mx-auto">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ 'List of Clients' }}
                    <br><br>
                    <a href="{{ route('posts.create') }}" class="btn btn-primary ml-2">Add Clients</a>
                </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="py-12">
        <div class="max-w-7xl mx-auto">
          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-4">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ 'List of Clients' }}
                    <br><br>
                    <a href="{{ route('posts.index') }}" class="btn btn-primary ml-2">View Clients</a>
                </h2>
            </div>
          </div>
        </div>
      </div>
   
      <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

@vite(['resources/css/st.css'])


  
<div class="py-12">
  <div class="max-w-7xl mx-auto ">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
          <div class="faq flex flex-row gap-3 align-items-center p-4">
              <span class="h2">WELCOME TO ONE CLOUDUIM </span> <br>
              
               <div class="h5"> Choose your cloud experience level to get started</div>
            </span>
          </div>
      </div>
  </div>
  

</div>
<div class="classification-cards max-w-7xl mx-auto">
  <div class="classification-card" data-type="newcomer">
      <div class="card-icon">
          <i class="fas fa-seedling"></i>
      </div>
      <h3>New to Cloud</h3>
      <p>I'm just getting started with cloud storage and want to learn the basics while keeping my data secure.</p>
      <ul class="feature-list">
          <li><i class="fas fa-check"></i> Guided setup process</li>
          <li><i class="fas fa-check"></i> Educational resources</li>
          <li><i class="fas fa-check"></i> Basic security features</li>
          <li><i class="fas fa-check"></i> Cost-effective storage</li>
      </ul>
      <button class="btn-primary" onclick="window.location.href='{{ route('newtocloud') }}'">
        Get Started
    </button>
    
  </div>
  
  <div class="classification-card max-w-7xl mx-auto" data-type="existing">
      <div class="card-icon">
          <i class="fas fa-cloud"></i>
      </div>
      <h3>Using Cloud Services</h3>
      <p>I already use cloud services like Google Workspace, Dropbox, or Microsoft 365 but need better management.</p>
      <ul class="feature-list">
          <li><i class="fas fa-check"></i> Connect existing accounts</li>
          <li><i class="fas fa-check"></i> Unified management</li>
          <li><i class="fas fa-check"></i> AI-powered optimization</li>
          <li><i class="fas fa-check"></i> Advanced security controls</li>
      </ul>
      <button class="btn-primary" onclick="window.location.href='{{ route('alreadyoncloud') }}'">Connect Services</button>
  </div>
</div>
<div class="py-12">
  <div class="max-w-7xl mx-auto">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
      <div class="p-4">
        <span class="h2 block mb-2 text-xl font-semibold">Already a client on One Cloudium?</span>
        <div class="h5 px-3 py-1 mb-4 text-lg font-medium">View Your Activity Dashboard</div>

        <!-- Button container aligned to the right -->
        <div >
          <button class="btn-primary" onclick="window.location.href='{{ route('clientdashboard') }}'">
            View Dashboard
          </button>
        </div>
      </div>
    </div>
  </div>
</div>


<br><br>
 
  <br><br>
  <br><br>
 

 
  <br><br>
 
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-left">
        <span class="contact-text">
          <strong>Email:</strong> contact@CLOUDUIMCONSULTING.com<br />
          <strong>Phone:</strong> +21622005970<br>
          <strong>Address:</strong>Republic Street, Sfax, Tunisia
        </span>
      </div>
      <div class="footer-center">
        <span class="footer-text">
          &copy; 2025 ONECLOUDIUM . ALL RIGHTS RESERVED
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


    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                





                
            </div>
        </div>
    </div>


</x-app-layout>