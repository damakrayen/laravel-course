<x-app-layout>
    <br>
<h1 class="text-center text-3xl font-bold" >New Clients</h1>
<div class="container my-5">
<form method="Post" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group " ><label for="title">Client Name</label>
        <input class="form-control" name=title id="title" type="text" value="{{old('title')}}"></div>
    <div><label for="content">Client id </label>
        <input class="form-control" name="content" id="content" type="text" value="{{old('content')}}"></div>
    <div  ><label for="slug">Client Plan</label>
        <input class="form-control" name="slug" id="slug" type="text" value="{{old('slug')}}"></div>
    <div><label for="active">Status</label>
        <input class="form-control" name="active" id="active" type="text" value="{{old('active')}}"></div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach 
        </ul>
        @endif
        <div class="d-flex justify-content-center mt-3">
        <button class="btn  btn-primary" type="submit"> Add Client </button>
        </div>
</form>
</div>

</x-app-layout>