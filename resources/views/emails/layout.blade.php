<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
        <title>Volteer</title>

        <style>
        .btn-eer {
            background: #d32f2f;
            color: #fff;
        }

        .btn-eer:hover {
            background: #b71c1c;
            color: #fff;
        }

        .btn-lg {
            padding: .75rem 1.5rem;
            font-size: 1.25rem;
            border-radius: .3rem;
        }
        .btn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .5rem 1rem;
            font-size: 1rem;
            border-radius: .25rem;
        }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-light bg-faded">
            <a class="navbar-brand" href="#">
                <img src="https://volteer.herokuapp.com/images/logo-email.png" alt="Volteer">
            </a>
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link btn btn-eer btn-lg" href="https://volteer.herokuapp.com/"
                        style=" background: #d32f2f;
            color: #fff; padding: .75rem 1.5rem;
            font-size: 1.25rem;
            border-radius: .3rem; display: inline-block;
            font-weight: 400;
            line-height: 1.25;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: .5rem 1rem;
            font-size: 1rem;
            border-radius: .25rem;"
                    >Go to site</a>
                </li>
            </ul>
        </nav>

        @yield('content')

    </body>
</html>
