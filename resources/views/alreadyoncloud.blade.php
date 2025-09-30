
<x-app-layout>
    

    <body class="bg-gray-50 min-h-screen">
      <div class="container mx-auto px-4 py-8">
        <div class="py-12">
            <div class="max-w-7xl mx-auto ">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="faq flex flex-row gap-3 align-items-center p-4">
                        <span class="h2"> Let us know about your Cloud provider </span> <br>
                        
                     

                      </span>
                    </div>
                </div>
            </div>
            <br><br><br>

    
        
    
        <!-- Integrations Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    
          <!-- Google Workspace -->
          <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow p-6">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div class="text-2xl">🔵</div>
                <div>
                  <h3 class="text-lg font-semibold">Google Workspace</h3>
                  <div class="flex items-center gap-2 mt-1">
                    <span class="bg-gray-200 px-1 rounded text-xs">Available</span>
                    <span class="bg-gray-100 border px-1 rounded text-xs">Free tier available</span>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-sm text-gray-500 mb-2">Gmail, Drive, Docs, Sheets, and more Google services</p>
            <h4 class="text-sm font-medium mb-2">Features</h4>
            <div class="flex flex-wrap gap-1 mb-4">
              <span class="bg-gray-100 border px-1 rounded text-xs">Email Management</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">Document Storage</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">Collaboration Tools</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">+1 more</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 border border-gray-300 px-2 py-1 rounded flex items-center gap-1 text-sm hover:bg-gray-100 transition">
                    ⚙️ Manage
                </button>
            
                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition" onclick="window.location.href='{{ route('Googleclient') }}'">
                    Connect
                </button>
            </div>
            
          </div>
    
          <!-- Dropbox -->
          <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow p-6">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div class="text-2xl">📦</div>
                <div>
                  <h3 class="text-lg font-semibold">Dropbox</h3>
                  <div class="flex items-center gap-2 mt-1">
                    <span class="bg-gray-200 px-1 rounded text-xs">Connected</span>
                    <span class="bg-gray-100 border px-1 rounded text-xs">2GB free</span>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-sm text-gray-500 mb-2">Cloud storage and file synchronization service</p>
            <h4 class="text-sm font-medium mb-2">Features</h4>
            <div class="flex flex-wrap gap-1 mb-4">
              <span class="bg-gray-100 border px-1 rounded text-xs">File Storage</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">File Sharing</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">Version Control</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">+1 more</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 border border-gray-300 px-2 py-1 rounded flex items-center gap-1 text-sm hover:bg-gray-100 transition">
                    ⚙️ Manage
                </button>
            
                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition" onclick="window.location.href='{{ route('dropboxclient') }}'">
                    Connect
                </button>
            </div>
            
          </div>
    
          <!-- Microsoft 365 -->
          <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow p-6">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div class="text-2xl">🔷</div>
                <div>
                  <h3 class="text-lg font-semibold">Microsoft 365</h3>
                  <div class="flex items-center gap-2 mt-1">
                    <span class="bg-gray-200 px-1 rounded text-xs">Available</span>
                    <span class="bg-gray-100 border px-1 rounded text-xs">Subscription based</span>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-sm text-gray-500 mb-2">Office apps, OneDrive, Teams, and enterprise services</p>
            <h4 class="text-sm font-medium mb-2">Features</h4>
            <div class="flex flex-wrap gap-1 mb-4">
              <span class="bg-gray-100 border px-1 rounded text-xs">Office Suite</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">OneDrive Storage</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">Teams Communication</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">+1 more</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 border border-gray-300 px-2 py-1 rounded flex items-center gap-1 text-sm hover:bg-gray-100 transition">
                    ⚙️ Manage
                </button>
            
                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition" onclick="window.location.href='{{ route('microsoftclient') }}'">
                    Connect
                </button>
            </div>
            
          </div>
    
          <!-- Amazon S3 -->
          <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow p-6">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div class="text-2xl">🟠</div>
                <div>
                  <h3 class="text-lg font-semibold">Azure</h3>
                  <div class="flex items-center gap-2 mt-1">
                    <span class="bg-red-200 px-1 rounded text-xs">Available</span>
                    <span class="bg-gray-100 border px-1 rounded text-xs">Pay as you use</span>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-sm text-gray-500 mb-2">Scalable object storage service from AWS</p>
            <h4 class="text-sm font-medium mb-2">Features</h4>
            <div class="flex flex-wrap gap-1 mb-4">
              <span class="bg-gray-100 border px-1 rounded text-xs">Object Storage</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">Data Backup</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">Content Distribution</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">+1 more</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 border border-gray-300 px-2 py-1 rounded flex items-center gap-1 text-sm hover:bg-gray-100 transition">
                    ⚙️ Manage
                </button>
            
                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition"onclick="window.location.href='{{ route('azureclient') }}'">
                    Connect
                </button>
            </div>
            
          </div>
    
          <!-- Slack -->
          <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow p-6">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div class="text-2xl">💬</div>
                <div>
                  <h3 class="text-lg font-semibold">Slack</h3>
                  <div class="flex items-center gap-2 mt-1">
                    <span class="bg-gray-200 px-1 rounded text-xs">Available</span>
                    <span class="bg-gray-100 border px-1 rounded text-xs">Free tier available</span>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-sm text-gray-500 mb-2">Team communication and collaboration platform</p>
            <h4 class="text-sm font-medium mb-2">Features</h4>
            <div class="flex flex-wrap gap-1 mb-4">
              <span class="bg-gray-100 border px-1 rounded text-xs">Team Messaging</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">File Sharing</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">App Integrations</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">+1 more</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 border border-gray-300 px-2 py-1 rounded flex items-center gap-1 text-sm hover:bg-gray-100 transition">
                    ⚙️ Manage
                </button>
            
                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition" onclick="window.location.href='{{ route('slackclient') }}'">
                    Connect
                </button>
            </div>
            
          </div>
    
          <!-- Notion -->
          <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow p-6">
            <div class="flex items-start justify-between mb-2">
              <div class="flex items-center gap-3">
                <div class="text-2xl">☁️</div>
                <div>
                  <h3 class="text-lg font-semibold">AWS</h3>
                  <div class="flex items-center gap-2 mt-1">
                    <span class="bg-gray-200 px-1 rounded text-xs">Connected</span>
                    <span class="bg-gray-100 border px-1 rounded text-xs">2GB free</span>
                  </div>
                </div>
              </div>
            </div>
            <p class="text-sm text-gray-500 mb-2">Cloud storage and file synchronization service</p>
            <h4 class="text-sm font-medium mb-2">Features</h4>
            <div class="flex flex-wrap gap-1 mb-4">
              <span class="bg-gray-100 border px-1 rounded text-xs">File Storage</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">File Sharing</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">Version Control</span>
              <span class="bg-gray-100 border px-1 rounded text-xs">+1 more</span>
            </div>
            <div class="flex gap-2">
                <button class="flex-1 border border-gray-300 px-2 py-1 rounded flex items-center gap-1 text-sm hover:bg-gray-100 transition">
                    ⚙️ Manage
                </button>
            
                <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition" onclick="window.location.href='{{ route('awsclient') }}'">
                    Connect
                </button>
            </div>
            
          </div>
      </div>
      <div class="py-12">
        <div class="max-w-7xl mx-auto ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="faq flex flex-row gap-3 align-items-center p-4">
                    <span class="h2"> Using another Cloud Service ? </span> <br>
                    
                     <div class="h5"> Fill this the following form to establish connection  </div>
                     <button class="bg-blue-600 text-white px-3 py-1 rounded text-sm font-medium hover:bg-blue-700 focus:ring-2 focus:ring-blue-400 transition">
                        let's Go
                    </button>
                  </span>
                </div>
            </div>
        </div>
    
  
  </body>
  </x-app-layout>
  
  