<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .img-left{
            margin-top:2%;
            margin-left:-20%
        }

        h1{
            font-size: 72px;
        }

        h2{
            margin-bottom:20px;
        }
        p{
            font-size: 32px;
        }
    </style>
    
</head>
<body>
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Справочник
                </a>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                   

                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto">
                       <!-- Authentication Links -->
                       
                     
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>
                               </div>
                           </li>
                      
                   </ul>
               </div>
            </div>  
        </nav> 
    </div>     

<div class="container">
  <div class="row">
    <div class="col">
    <img src="{{ $data->image }}" class="img-left" >
    </div>
    <div class="col">
        <h1> {{$data->title}}</h1>
        <h2> {{$data->author}}</h2>
        <p> {{$data->body}}<p>
            @if(Auth::check())
        <a href="{{ route('redact-album', $data->id) }}"><button class="btn btn-warning btn-lg">Redact</button></a>
        <a href="{{ route('delete-album', $data->id) }}"><button class="btn btn-warning btn-lg">Delete</button></a>
        @endif
    </div>
  </div>
</div>
</body>
</html>  
        

