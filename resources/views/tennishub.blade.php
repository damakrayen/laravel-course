<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ONE CLOUDIUM </title>
    
  
    @vite(['resources/css/rayen.css'])

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
      rel="stylesheet"
    />

    <script defer src="app.js"></script>
  </head>
  <body>
    <div class="wrapper">
      <header>
        <div class="shrink-0 flex items-center ">
              <x-application-mark class="block h-9 w-auto" />
          </a>
      </div>
        <span class="logo">ONE CLOUDIUM </span>

       
        <div class="regist align-items-center">
         
          <a class="btn mt-1" href="{{ route('login') }}">SIGN IN</a>
          <a class="btn mt-1" href="{{ route('register') }}">SIGN UP</a>
        </div>
      </header>

      <div class="container hero rounded mt-3" style="margin-bottom: 1rem;">
        <span class="h1">ONE CLOUDIUM : WHERE<br />INTEGRATION MEETS SIMPLICITY </span>
        <span class="h4 mt-2">
          Businesses Connect to the Cloud.
        </span>
        <a class="btn mt-3" href="{{ route('login') }}">sign in</a>
        <div class="image rounded mt-3"></div>
      </div>

      <div class="container promote" style="overflow: hidden;">
        <div class="left">
          <div class="description hidden hidden-up">
            <br>
            <span class="h2 fs-2">
              Making cloud security & optimization accessible,    <br />
              affordable, and simple <br />
              for small businesses, startups and universities   <br />
              in Tunisia and beyond.
              <br>
            </span>

           
          </div>
          <div class="aside rounded hidden hidden-downRight" style="overflow: hidden;">
            <div class="aside-desc">
              <span class="fs-3 fw-400 hidden hidden-up trd">150+ PARTNERS</span>
              <span class="fs-7 lh-4 mt-2 hidden hidden-down trd"></span>
            </div>
            <div class="aside-bg hidden hidden-downRight trd"></div>
          </div>
        </div>
        <div class="right image rounded hidden hidden-right"></div>
      </div>

      <div class="container apply-form bg-four rounded text-white hidden hidden-down" style="overflow: hidden;">
        <div class="flex flex-column align-items-center text-center" style="z-index: 3;">
          <div class="flex flex-column">
            <span class="h3-2">SIGN UP</span>
            <span class="fs-7 mt-2">Leave your contact details and we will contact you as soon as possible.</span>
          </div>
          
        </div>
      </div>

      <div class="container advantages flex flex-column">
        <div class="faq flex flex-row gap-3 align-items-center">
          <span class="h2">Why choose us?</span>

        </div>
        <div class="box flex flex-column gap-3 text-white mt-4" style="height: 450px; overflow: hidden;">
          <div class="box-one flex flex-row gap-3 col-6">
            <div class="box1 col-5 flex flex-column p-2 rounded bg-two hidden hidden-left-box">
              <span class="fs-4 fw-600 lh-3">Secure Data 
                Management <br /> Compression <br> Encryption <br></span>

            </div>
            <div class="box2 col-4 rounded hidden hidden-up-box"></div>
            <div class="box3 col-3 flex flex-column p-2 rounded bg-one hidden hidden-right-box">
              <span class="fs-4 fw-600 lh-3">Simple <br> Dashboards <br> For non-<br>Technical users</span>
              <span class="mt-2 lh-4">
               
              </span>
            </div>
          </div>
          <div class="box-two flex flex-row gap-3 col-6">
            <div class="box4 col-4 rounded hidden hidden-box4"></div>
            <div class="col-8" style="overflow: hidden; height: 100%;">
              <div class="box5 flex flex-row justify-content-between p-2 rounded bg-three hidden hidden-box5" style="overflow: hidden; height: 100%;">
                <div class="box5-left flex flex-column align-items-start">
                  <span class="fs-4 fw-600 lh-3">Expert Staff <br /> </span>
                  <span class="mt-2 lh-4 mt-3">Our staff is made up of specialists with years of experience ready to help  at any time.</span>
                </div>
                <div class="box5-right flex flex-row align-items-end fw-600" style="font-size: 8rem; height: 6rem; margin-top: auto; margin-bottom: 10px;">
                  <span style="line-height: 6rem">-</span>
                  <span style="line-height: 6rem">24/7</span>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

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
    </div>
    <script src="{{ asset('js/app1.js') }}"></script>
  </body>
  
</html>
