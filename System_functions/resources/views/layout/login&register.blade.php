<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('room/images/icons/favicon.ico')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('room/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('room/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('room/vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('room/vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('room/vendor/select2/select2.min.cssv')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('room/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('room/css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">

        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{asset('room/images/img-01.png')}}" alt="IMG">
                    </div>

                    <section id="homeBLog">
                        <div class="container">
                            <div class="row">
                                @yield('content')

                            </div>
                        </div>
                    </section>

                    <form class="login100-form validate-form">


                        <div class="text-center p-t-136">
                            <a class="txt2" href="#">


                            </a>
                        </div>
                    </form>
                </div>

            </div>
        </div>





</div>
</div>




<!--===============================================================================================-->
<script src="{{asset('room/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('room/vendor/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('room/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('room/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
<script src="{{asset('room/vendor/tilt/tilt.jquery.min.js')}}"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('room/js/main.js')}}"></script>

</body>
</html>
