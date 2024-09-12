<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accommodation System</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <style>
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                background-color: #160d37ec;
                margin-bottom: 0;
                border-radius: 0;
            }
            .image-container {
             width: 100%; /* Set to the desired width */
             height: 750px; /* Set to the desired height */
             overflow: hidden; /* Ensures no spill outside the container */
            }

             .image-container img {
             width: 100%;
             height: 100%;
             object-fit: cover;
             object-position: center; /* Adjust if you need to focus on a particular part of the image */
            }

            
            /* Add a gray background color and some padding to the footer */
           
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Accommodation Website</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{ route('home') }}">Dashboard</a></li>
                            @else
                                <li><a href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                                @if (Route::has('register'))
                                    <li><a href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="image-container">
            <img src="{{ asset('images/youth-hostel.jpg') }}" alt="Hostel">
        </div>
        
       

    </body>
</html>
