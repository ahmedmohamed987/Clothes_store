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
    <div class="container">
        
    <div class="row my-5">
        <div id="carouselExampleFade" class="carousel slide carousel-fade py-5" data-bs-ride="carousel">
            <div class="carousel-inner">

               <div class="carousel-item active">
                <img src="image\07.png" class="d-block w-100" alt="...">
              </div>
               <div class="carousel-item">
                <img src="image\50.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="image\51.png" class="d-block w-100" alt="...">
              </div> 
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        @foreach ($clothes as $item)
        
        <div class="card m-5" id="pro" style="width: 21rem;">
            <img src="{{Voyager::image($item->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$item->name}}</h5>
              <h6 class="card-title">Price :{{$item->price}}</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{ route('clothes.show',$item->id)}}" class="btn btn-primary">Go somewhere</a>
            
            </div>
          </div> 
          
        @endforeach
        <div class="m-4 pag">
          {{$clothes->links()}}
        </div>
      </div>
    </div>

</body>
</html>