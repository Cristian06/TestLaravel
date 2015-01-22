<!DOCTYPE html>
<html>
    <head>

        <title>Login</title>
        <!--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css" media="screen">
        <script src="assets/js/bootstrap.min.js"></script>-->
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-theme.min.css') }}">

        <style type="text/css">
            .parent{
                width: 500px;
                margin: auto;
            }
            .login{
                width: 490px;
            }
            .welcome{
                width: 490px;
               /* background-color: red;*/
            }
            .alert{
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
                .alert h3{
                    text-align: center;
                }
        </style>
    </head>

    <body>

        <div class="parent">

            @section('parent')
                <div class="content">
                    <h2>Log In</h2>
                </div>
            @show

            <div class="login">
                @yield('login')
            </div>
        
            <div class="welcome">
                @yield('welcome')
            </div>
      

        </div>
    </body>
</html>