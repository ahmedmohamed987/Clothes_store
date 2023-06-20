<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/show.css')}}">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">

    <title>Bootstrap demo</title>
   
  </head>
  <body>
    @extends('master')
       <div class="container">
         <div class="row ">
            <div class="col-lg-4 col-md col-sm-2 my-3 py-5">
               <img  src="{{Voyager::image($clothes->image)}}" class="w-100" alt="">
            </div>
            @auth
            <div class="col-lg-3 col-md col-sm-3 py-5 my-5">
              <div class="container2">
                <h5 class="price">Price {{$clothes->price}}</h5>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Meduim
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Large
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" >
                  <label class="form-check-label" for="exampleRadios3">
                    X-large
                  </label>
                </div>
              </div>
            </div>
                    <div class="col-lg-5  col-md-6  col-sm  ">
                          
                          {{-- <h5 class="qtn">Quantity</h5> --}}
                          <div>
                            <h5 class="qtn">Quantity</h5>
                              <button id="but1" class="b1">-</button>
                              {{-- <input   class="input" id ="text" type="text" value="1"> --}}
                              <input type="text" class="form-control w-25 input" name="price" id="exampleFormControlInput1" value="1">
                              <button id="but2" class="b2">+</button>
                          </div>
                         
                        <!-- Button trigger modal -->
                                <i class="fa-solid fa-cart-shopping fa-xl cart"></i>
                               <button type="button" class=" bttn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Add to cart
                               </button>

                           <!-- Modal -->
                          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="exampleModalLabel">Cart</h1>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                  <img src="{{Voyager::image($clothes->image)}}" class="rounded float-start w-25" alt="...">
                                    <span class="p">{{$clothes->price}}</span>
                                   
                                    <button href="#" class="btn btn-secondary rounded text-white p-1 border-0 remove"><i class="fa-solid fa-trash px-1"></i>Remove</button>
                                </div>
                                <hr>
                                <div class="mb-4">
                                   <span class="total px-5 "> TotalPrice</span>
                                   <span>{{$clothes->price}}</span>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                                    CheckOut
                                  </button>
                                 
                                </div>
                              </div>
                            </div>
                          </div>
                                                
                    </div>
                @endauth
             
               
            
         </div>
       </div>

       <script src="{{asset('jquery-3.6.0.min.js')}}"></script>
       <script>
          $('.b2').click(function(){
             let x = $('.input').val()
             x++
             if(x<=1)
             {
                 x=1
             }
             $('.input').val(x)
           })
           $('.b1').click(function(){
             let x = $('.input').val()
             if(x >1){
              x--
             }
             if(x<=1)
             {
                 x=1
             }
             $('.input').val(x)
           })
          $('.b2').click( function(){
               let a = $('.input').val() 
               let c =parseInt($('hidden').html())
               let y= a* c
               $('.total').val(y)
           })
           $('.b1').click( function(){
   
               let a = $('.input').val() 
               let c =parseInt($('hidden').html())
               if(a<=1){
                   $('.total').val(c)
               }
               else{
               let y= $('.total').val()-c
               $('.total').val(y)
               }
           })
   
           $('.b3').click(function(){
               $('.check').toggle(500)
           })
           $('.btn').click(function(){
        $('.modal').toggle('close')
      })
      $('.btn-close').click(function(){
        $('.modal').toggle('close')
      })
      
       </script>
  </body>
</html>