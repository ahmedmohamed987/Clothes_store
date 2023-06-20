<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >
  <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="fixed-top">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
        <div class="container">
          <a class="navbar-brand" href="#">Clothes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          @auth
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="{{ route('home')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('clothes.index')}}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              @endauth
              @guest
          
              <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">Log in</a>
              </li>
              <li class="nav-item">
              @if (Route::has('register'))
                  <a href="{{ route('register') }}" class="nav-link">Register</a>
              </li>
              @endif
          @endguest
          @auth()
          <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
             <button type="submit" class="btn btn-outline-dark text-white">Logout</button>
                
            </form>
          </li>
          @endauth
            </ul>
            @auth
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> 
            @endauth
         
          </div>
        </div>
      </nav>
    </div>
</header>

<script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
