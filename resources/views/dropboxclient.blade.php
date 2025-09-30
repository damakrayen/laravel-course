
<x-app-layout>

  <br>
<h1 class="text-center text-3xl font-bold" >New Connection</h1>
<div class="container my-5">
<form method="Post" action="{{route('tournois.store')}}">
  @csrf
  <div class="form-group " ><label for="nom">Cloud Provider Name </label>
    <input class="form-control" name="nom" id="locanomlisation" type="text" value="{{old('nom')}}"></div>
  <div class="form-group " ><label for="localisation">Startup Name </label>
      <input class="form-control" name="localisation" id="localisation" type="text" value="{{old('localisation')}}"></div>
  <div  ><label for="date">Subscription Expiration Date </label>
      <input class="form-control" name="date" id="date" type="text" value="{{old('date')}}"></div>
  <div><label for="frais">Phone Number</label>
          <input class="form-control" name="frais" id="frais" type="text" value="{{old('frais')}}"></div>
  <div><label for="prix">API Key </label>
      <input class="form-control" name="prix" id="prix" type="text" value="{{old('prix')}}"></div>
  <div><label for="nombrejoueurs">Account Id</label>
          <input class="form-control" name="nombrejoueurs" id="nombrejoueurs" type="text" value="{{old('nombrejoueurs')}}"></div>
      @if($errors->any())
      <ul>
          @foreach($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach 
      </ul>
      @endif
      <div class="d-flex justify-content-center mt-3">
          <button class="btn  btn-primary" type="submit"> Confirm </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-secondary" href="{{route('dashboard')}}">Go Back</a>
      
      </div>
</form>
</div>



   
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


</x-app-layout>

