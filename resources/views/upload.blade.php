
<x-app-layout>
   
    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Upload Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<br><br><br><br><br>
<body class="bg-gray-50 min-h-screen p-6">

  <div class="max-w-7xl mx-auto space-y-8">

    <!-- Upload Zone -->
    <div class="border-2 border-dashed rounded-lg hover:border-indigo-500 transition-colors">
      <div class="p-12 text-center">
        <div class="mx-auto w-16 h-16 mb-4 rounded-full bg-indigo-100 flex items-center justify-center">
          ☁️
        </div>
        <h3 class="text-lg font-semibold mb-2">Upload your files</h3>
        <p class="text-gray-500 mb-6">Drag and drop files here, or click to browse</p>
        <div class="space-y-2">
          <label class="px-6 py-3 bg-indigo-600 text-white rounded-lg flex items-center mx-auto hover:bg-indigo-700 cursor-pointer">
            ⬆️ <span class="ml-2">Choose Files</span>
            <input id="fileInput" type="file" multiple class="hidden" />
          </label>
          <p class="text-xs text-gray-500">Supports: PDF, DOC, XLS, CSV, Images, and more</p>
        </div>
      </div>
    </div>

    <!-- Upload Progress -->
    <div id="progressContainer" class="hidden border rounded-lg bg-white p-6 shadow">
      <h4 class="text-lg font-semibold mb-4">Upload Progress</h4>
      <div id="fileList" class="space-y-4"></div>
    </div>

    <!-- Settings and Security -->
    <div class="grid gap-6 md:grid-cols-2">

      <!-- Upload Settings -->
      <div class="border rounded-lg bg-white shadow">
        <div class="p-4 border-b">
          <h2 class="font-semibold flex items-center space-x-2">⚙️ <span>Upload Settings</span></h2>
          <p class="text-sm text-gray-500">Configure how your files are processed and stored</p>
        </div>
        <div class="p-6 space-y-6">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-base">Auto Classification</p>
              <p class="text-sm text-gray-500">Automatically classify files based on content</p>
            </div>
            <input type="checkbox" checked class="h-5 w-5 accent-indigo-600" />
          </div>
          <div class="flex items-center justify-between">
            <div>
              <p class="text-base">Encrypt Files</p>
              <p class="text-sm text-gray-500">Enable end-to-end encryption for uploaded files</p>
            </div>
            <input type="checkbox" checked class="h-5 w-5 accent-indigo-600" />
          </div>
          <div>
            <p class="text-base mb-2">Compression Level</p>
            <input type="range" min="0" max="100" value="50" step="10" class="w-full" />
            <div class="flex justify-between text-xs text-gray-500 mt-1">
              <span>None</span>
              <span>Maximum</span>
            </div>
            <div class="text-sm text-gray-500 mt-1">Current: 50% compression</div>
          </div>
          <div>
            <p class="text-base mb-2">Storage Class</p>
            <select class="w-full border rounded-lg p-2">
              <option>Standard Access</option>
              <option>Infrequent Access</option>
              <option>Archive Storage</option>
              <option>Deep Archive</option>
            </select>
            <p class="text-sm text-gray-500 mt-1">Choose based on how frequently you'll access these files</p>
          </div>
        </div>
      </div>

      <!-- Security & Compliance -->
      <div class="border rounded-lg bg-white shadow">
        <div class="p-4 border-b">
          <h2 class="font-semibold flex items-center space-x-2">🛡️ <span>Security & Compliance</span></h2>
          <p class="text-sm text-gray-500">Ensure your data meets security requirements</p>
        </div>
        <div class="p-6 space-y-4">
          <div class="grid grid-cols-2 gap-4">
            <div class="p-4 bg-gray-100 rounded-lg text-center">🛡️<div class="text-sm font-medium mt-2">SOC 2 Compliant</div></div>
            <div class="p-4 bg-gray-100 rounded-lg text-center">💾<div class="text-sm font-medium mt-2">GDPR Ready</div></div>
            <div class="p-4 bg-gray-100 rounded-lg text-center">⚡<div class="text-sm font-medium mt-2">256-bit AES</div></div>
            <div class="p-4 bg-gray-100 rounded-lg text-center">🛡️<div class="text-sm font-medium mt-2">ISO 27001</div></div>
          </div>
          <div class="p-4 bg-indigo-50 border border-indigo-200 rounded-lg">
            <h4 class="font-medium text-indigo-600 mb-2">Enterprise Security</h4>
            <ul class="text-sm text-gray-600 space-y-1">
              <li>• End-to-end encryption in transit and at rest</li>
              <li>• Multi-factor authentication required</li>
              <li>• Audit logs for all file operations</li>
              <li>• Role-based access controls</li>
            </ul>
          </div>
        </div>
      </div>

    </div>

  </div>

<script>
  const fileInput = document.getElementById("fileInput");
  const progressContainer = document.getElementById("progressContainer");
  const fileList = document.getElementById("fileList");

  fileInput.addEventListener("change", (e) => {
    const files = Array.from(e.target.files);
    if (files.length > 0) {
      progressContainer.classList.remove("hidden");
    }
    files.forEach((file) => {
      const fileId = Math.random().toString(36).substr(2, 9);
      const wrapper = document.createElement("div");
      wrapper.className = "flex items-center space-x-4 p-4 bg-gray-100 rounded-lg";
      wrapper.innerHTML = `
        <div class="flex-shrink-0">📄</div>
        <div class="flex-1 min-w-0">
          <div class="flex items-center justify-between mb-1">
            <p class="text-sm font-medium truncate">${file.name}</p>
            <div class="flex items-center space-x-2">
              <span id="status-${fileId}" class="text-xs text-gray-500">Uploading...</span>
              <button class="text-gray-400 hover:text-red-500" onclick="this.closest('div.flex').remove()">✖</button>
            </div>
          </div>
          <div class="flex items-center justify-between text-xs text-gray-500 mb-2">
            <span>${(file.size / 1024).toFixed(1)} KB</span>
            <span id="percent-${fileId}">0%</span>
          </div>
          <div class="w-full bg-gray-200 rounded h-2">
            <div id="bar-${fileId}" class="bg-indigo-500 h-2 rounded" style="width: 0%"></div>
          </div>
        </div>
      `;
      fileList.appendChild(wrapper);

      // Simulate upload
      let progress = 0;
      const interval = setInterval(() => {
        progress += Math.random() * 20;
        if (progress >= 100) {
          progress = 100;
          clearInterval(interval);
          document.getElementById(`status-${fileId}`).innerText = "✅ Completed";
        }
        document.getElementById(`bar-${fileId}`).style.width = progress + "%";
        document.getElementById(`percent-${fileId}`).innerText = Math.round(progress) + "%";
      }, 500);
    });
  });
</script>

</body>
</html>

    
  <br><br>
     
      <br><br>
      <br><br>
     
  
     
      <br><br><br><br>
     
       
    
       
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
    
    
    </x-app-layout>
    
    