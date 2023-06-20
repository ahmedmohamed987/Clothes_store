<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>clothes</title>
</head>
<body>
    @extends('master')
    <div class="container py-5">
        
    <div class="row my-5">
       <form action="{{route('clothes.store')}}" method="POST"
       enctype="multipart/form-data"> 
         @csrf   
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" >
          </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="exampleFormControlInput1" >
          </div>
         
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Image</label>
            <input type="file" class="form-control my-5" name="image" id="exampleFormControlInput1">
          </div>
       
           <button type="submit" class="btn btn-primary px-5">Create</button>
        
      </form> 
      </div>
    </div>
     
</body>
</html>