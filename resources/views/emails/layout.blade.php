<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Volteer</title>
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,700" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
        <link rel="stylesheet" href="http://volteer.herokuapp.com/css/style.css">

        <style>
            .avatar-container img {
                width: 40px;
                height: 40px;
                border-radius: 100px;
                marin-right .5rem;
            }

            .dropdown {
                margin-top: .5rem;
            }
        </style>
        <!-- CSRF Token -->
    </head>
    <body>
        <nav class="navbar navbar-light bg-faded">
            <a class="navbar-brand" href="#">
                <img src="https://volteer.herokuapp.com/images/logo.png" alt="Volteer">
            </a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="https://volteer.herokuapp.com/i">Go to site</a>
                </li>
            </ul>
            </form>
        </nav>

        @yield('content')

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/30b1b5bdff.js"></script>
    </body>
</html>