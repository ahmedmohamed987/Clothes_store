<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/edit.css')}}">
    
    <title>clothes</title>
</head>
<body>
    @extends('master')
    <div class="container py-5">
        
    <div class="row my-5">
       <form action="{{route('clothes.update',$clothes->id)}}" method="POST" enctype="multipart/form-data">
         @csrf   
         @method('PUT')
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control w-50" name="name" id="exampleFormControlInput1" value="{{$clothes->name}}">
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="text" class="form-control w-50" name="price" id="exampleFormControlInput1" value="{{$clothes->price}}">
          </div>
          <div class="mb-3 ">
            <label for="exampleFormControlInput1" class="form-label d-block">Image</label>
             <img src="{{Voyager::image($clothes->image)}}" class="rounded float-start w-25 my-3" alt="{{$clothes->name}}">
          </div>
          <div class="mb-3">
            <input type="file" class="form-control w-50 file" name="image" id="exampleFormControlInput1" value="{{$clothes->price}}">
          </div>
       
           <button type="submit" class="btn btn-primary px-5">Update</button>
        
      </form> 
      </div>
    </div>
     
</body>
</html>