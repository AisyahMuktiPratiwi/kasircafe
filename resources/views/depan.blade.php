<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shorcut icon" href="{{asset('admlte/img/logo.png')}}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Sail&family=Kaushan+Script&family=Bungee+Shade"
        rel="stylesheet">
    <title>Cafe Ngopi | Beranda</title>
    <style>
    .navbar {
        top: 0;
        position: fixed;
        width: 100%;
        z-index: 1;
        opacity: 0.5
    }

    @media screen and (min-width:1170px) {


        .carousel-caption {

            position: absolute;
            top: 0;
            width: 85%;
            height: 100%;
            background-color: rgb(155, 129, 129);
            clip-path: circle(680px at right);

        }

        .kopi {

            width: 60rem;

        }

        .carousel-caption h1 {
            margin-top: 16rem;
            margin-left: 33rem;
            color: rgb(248, 219, 123);
            font-family: 'Bungee Shade', cursive;

        }

        .carousel-caption p {
            font-family: 'Kaushan Script', cursive;
            margin-left: 33rem;
            color: rgb(248, 219, 123);
            font-size: 20px;
            margin-top: 3rem;

        }

        .btn {
            border-radius: 50px;
            color: rgb(248, 219, 123);
            font-family: 'Kaushan Script', cursive;
            margin-left: 35rem;
            font-size: 25px;
            width: 20%;
            margin-top: 3rem;
        }
    }

    @media (min-width:1010px) and (max-width:1169px) {


        .carousel-caption {

            position: absolute;
            top: 0;
            width: 85%;
            height: 100%;
            background-color: rgb(155, 129, 129);
            clip-path: circle(680px at right);
            margin-left: 10rem
        }

        .kopi {

            width: 30rem;

        }


        .carousel-caption h1 {
            margin-top: 12rem;
            margin-left: 19rem;
            color: rgb(248, 219, 123);
            font-family: 'Bungee Shade', cursive;
            font-size: 18px
        }

        .carousel-caption p {
            font-family: 'Kaushan Script', cursive;
            margin-left: 19rem;
            color: rgb(248, 219, 123);
            font-size: 16px;
            margin-top: 2rem
        }

        .btn {
            border-radius: 50px;
            color: rgb(248, 219, 123);
            font-family: 'Kaushan Script', cursive;
            margin-left: 19rem;
            font-size: 11px;
            width: 25%;
            margin-top: 1rem
        }
    }

    @media (min-width:840px) and (max-width:1009px) {


        .carousel-caption {

            position: absolute;
            top: 0;
            width: 85%;
            height: 100%;
            background-color: rgb(155, 129, 129);
            clip-path: circle(680px at right);
            margin-left: 10rem
        }

        .kopi {
            width: 25rem
        }

        .carousel-caption h1 {
            margin-top: 10rem;
            margin-left: 11rem;
            color: rgb(248, 219, 123);
            font-family: 'Bungee Shade', cursive;
            font-size: 18px
        }

        .carousel-caption p {
            font-family: 'Kaushan Script', cursive;
            margin-left: 10rem;
            color: rgb(248, 219, 123);
            font-size: 16px;
            margin-top: 2rem
        }

        .btn {
            border-radius: 50px;
            color: rgb(248, 219, 123);
            font-family: 'Kaushan Script', cursive;
            margin-left: 10rem;
            font-size: 11px;
            width: 25%;
            margin-top: 1rem
        }
    }

    @media (min-width:621px) and (max-width:839px) {


        .carousel-caption {

            position: absolute;
            top: 0;
            width: 85%;
            height: 100%;
            background-color: rgb(155, 129, 129);
            clip-path: circle(680px at right);
            margin-left: 10rem
        }

        .kopi {
            width: 19rem;

        }

        .carousel-caption h1 {
            margin-top: 7rem;
            margin-left: 2rem;
            color: rgb(248, 219, 123);
            font-family: 'Bungee Shade', cursive;
            font-size: 16px
        }

        .carousel-caption p {
            font-family: 'Kaushan Script', cursive;
            margin-left: 2rem;
            color: rgb(248, 219, 123);
            font-size: 14px;
            margin-top: 1rem
        }

        .btn {
            border-radius: 50px;
            color: rgb(248, 219, 123);
            font-family: 'Kaushan Script', cursive;
            margin-left: 2rem;
            font-size: 11px;
            width: 25%;

        }
    }

    @media (min-width:500px) and (max-width:620px) {


        .carousel-caption {

            position: absolute;
            top: 0;
            width: 83%;
            height: 100%;
            background-color: rgb(155, 129, 129);
            clip-path: circle(480px at right);
            margin-left: 10rem
        }

        .kopi {
            width: 14rem;

        }

        .carousel-caption h1 {
            margin-top: 7rem;

            color: rgb(248, 219, 123);
            font-family: 'Bungee Shade', cursive;
            margin-left: 2rem;
            font-size: 9px;
        }

        .carousel-caption p {
            font-family: 'Kaushan Script', cursive;
            margin-left: 2rem;
            color: rgb(248, 219, 123);
            font-size: 7px;
            margin-top: 1rem
        }

        .btn {
            border-radius: 50px;
            color: rgb(248, 219, 123);
            font-family: 'Kaushan Script', cursive;
            margin-left: 2rem;
            font-size: 11px;
            width: 25%;
            margin-bottom: 2rem;
        }
    }



    @media (min-width:50px) and (max-width:499px) {


        .carousel-caption {

            position: absolute;
            top: 0;
            width: 83%;
            height: 100%;
            background-color: rgb(155, 129, 129);
            clip-path: circle(410px at right);
            margin-left: 10rem
        }

        .kopi {
            width: 0rem;

        }

        .carousel-caption h1 {
            margin-top: 4rem;

            color: rgb(248, 219, 123);
            font-family: 'Bungee Shade', cursive;
            margin-left: 2rem;
            font-size: 10px;
        }

        .carousel-caption p {
            font-family: 'Kaushan Script', cursive;
            margin-left: 2rem;
            color: rgb(248, 219, 123);
            font-size: 7px;

        }

        .btn {
            border-radius: 50px;
            color: rgb(248, 219, 123);
            font-family: 'Kaushan Script', cursive;
            margin-left: 2rem;
            font-size: 7px;
            width: 25%;
        }
    }
    </style>
</head>

<body style="overflow-y:hidden;overflow-x:hidden">

    <nav class=" navbar navbar-expand-md" style="background-color: rgb(122, 99, 99);">
        <div class="container">
            <a class="navbar-brand" href="#" style="color:gold;font-family: 'Sail', cursive;font-size:25px"><img
                    src="{{asset('admlte/img/logo.png')}}" alt="" width="50px">
                Cafe Ngopi</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"
                style="float: right;color:gold;font-family: 'Kaushan Script', cursive;">Rajanya
                Kopi Kekinian</a>
        </div>
    </nav>

    <div id="carouselId" class="carousel slide" data-bs-ride="carousel" width="100%" height="100%">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="{{asset('admlte/img/1.jpg')}}" alt="First slide" width="100%">
            </div>
            <div class="carousel-item">
                <img src="{{asset('admlte/img/2.jpg')}}" alt="Second slide" width="100%">
            </div>
            <div class="carousel-item">
                <img src="{{asset('admlte/img/3.jpg')}}" alt="Third slide" width="100%">
            </div>
        </div>

        <div class="carousel-caption">


        </div>

        <div class=" carousel-caption">
            <img src="{{asset('admlte/img/kopi1.png')}}" alt="" style="position:absolute" class="kopi">
            <div class="halo" style="position:absolute">
                <h1 style="">
                    Selamat Datang
                    di Cafe
                    Ngopi</h1>


                <p style="">
                    Silahkan Login
                    Sesuai Hak
                    Akses
                    Yang Telah DiBerikan </p>


                <a class="btn btn-outline-warning " href="{{route('login')}}" style=" ">Login</a>
            </div>
        </div>

    </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!- - Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>




















</html>
