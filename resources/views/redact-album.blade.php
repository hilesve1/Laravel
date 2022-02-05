
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
            font-size: 36px;
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
    <form action="{{ route('redact-album-submit', $data->id) }}" method="post">
        @csrf
        <div class="div">
            <h1>Title:</h1>
            <input type="text" name="title"  value="{{ $data->title }}" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm"  id="title" ></input>
        </div>

        <div class="div">
            <h1>Author:</h1>
            <input type="text" name="author" class="form-control" value="{{ $data->title }}"  id="author" ></input>
        </div>

        <div class="div">
            <h1>Body:</h1>
            <input type="text" name="body" class="form-control" value="{{ $data->title }}"  id="body" ></input>
        </div>

        <button type="submit" class="btn-warning btn-lg">Upload</button>
    </form>
    </div>
    </div>
</div>

</body>
</html>  
        



