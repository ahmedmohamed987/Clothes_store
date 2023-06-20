
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <title>clothes</title>
</head>
<body>
     @extends('master')
    <div class="container">
      
    <div class="row mt-5">
      @auth
      @foreach ($clothes as $clothe)
      @if ($loop->first)
        <div class="mt-5">
          @can('add',$clothe)
          <a href="{{route('clothes.create')}}"  class="rounded-4 bg-primary p-2 text-white border-0 text-decoration-none  ">
            <i class="fa-solid fa-circle-plus"></i>
            <span>create</span>
          </a>
          @endcan
        </div>
      @endif
     @endforeach
     @endauth
         @foreach ($clothes as $item)
        
        <div class="card m-5" id="pro" style="width: 21rem;">
            <img src="{{Voyager::image($item->image)}}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{$item->name}}</h5>
              <h6 class="card-title">Price :{{$item->price}}</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="{{ route('clothes.show',$item->id)}}" class="btn btn-primary">View Product</a>
              @auth  
              @can('edit' ,$item)
               <a href="{{ route('clothes.edit',$item->id) }}" class="rounded-circle bg-primary p-2 text-white border-0 mx-2"><i class="fa-solid fa-pen-to-square "></i></a>
              @endcan
              <form class="d-inline-block" method="post" action="{{ route('clothes.destroy', $item->id) }}"   >
                 @csrf
                @method('DELETE')
                @can('delete',$item)
                   <button href="#" class="rounded-circle bg-danger p-2 text-white  border-0"><i class="fa-solid fa-trash   "></i></button>
                @endcan
               
              </form>
              @endauth
            </div>
          </div>
        @endforeach
       
        <div class="m-4 pag">
          {{$clothes->links()}}
        </div>
      </div>
    </div>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
