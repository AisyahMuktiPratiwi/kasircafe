<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Css link-->

    <!--fontawesome 5 link-->
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <!--google font link-->


    <link href="https://fonts.googleapis.com/css2?family=Sail&family=Kaushan+Script&family=Bungee+Shade"
        rel="stylesheet">
    <link rel="shorcut icon" href="{{asset('admlte/img/logo.png')}}">
    <title>Cafe Ngopi | Beranda</title>
    <style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;

    }

    body {
        background-image: url('{{asset('admlte/img/cafe.gif')}}');

        background-repeat: no-repeat;
        background-color: #ebd7c3;
        background-size: cover;
    }

    .navbar-toggler {
        outline: none;
        border: none;
    }

    .navbar-nav {
        opacity: 0.5;
        font-size: 1rem;
        color: gold;
        font-weight: 700;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    .nav-link p {
        color: gold;
        font-family: 'Sail', cursive;
        transition: all 0.3s ease-in-out;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
    }

    .nav-link p:hover {
        color: rgb(95, 98, 98);
    }

    .fa-bars {
        color: #b79d82;
    }

    #cbtn {
        display: none;
    }

    #cbtn:checked~.menu-btn .fa-bars::before {
        content: " \f00d ";
    }

    .break1 {
        display: none;
    }

    .break2 {
        display: none;
    }

    .break3 {
        display: none;
    }

    .firstContainer {
        padding-top: 170px;
    }

    .img1 img {
        max-width: 300px;
        max-height: 410px;
    }

    .thirdContainer {
        position: fixed;
        top: 42%;
        right: 4%;
        z-index: 1;
    }

    .thirdContainer div {
        padding-top: 15px;
    }

    .thirdContainer div a {
        color: white;
    }

    .fourthContainer {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100vh;
        background-color: #b79d82;
        z-index: -1;
        clip-path: circle(650px at right 800px);
    }

    .firstContainer {
        overflow-x: hidden;
    }

    .ImageThumb {
        margin-top: -25px;
    }

    .ImageThumb img {
        transition: all 0.3s linear;
        cursor: pointer;
        -webkit-transition: all 0.3s linear;
        -moz-transition: all 0.3s linear;
        -ms-transition: all 0.3s linear;
        -o-transition: all 0.3s linear;
    }

    .ImageThumb img:hover {
        transform: translateY(-10px);
        -webkit-transform: translateY(-10px);
        -moz-transform: translateY(-10px);
        -ms-transform: translateY(-10px);
        -o-transform: translateY(-10px);
    }

    .Button button {
        box-shadow: 1px 1px 10px 4px rgb(105, 103, 103);

    }

    @media(min-width:1400px) {
        .navbar-nav {
            padding-left: 740px;
            font-size: 1rem;
        }

        .img1 {
            margin-top: -70px;
            padding-left: 230px;
        }

        .Secondcontainer {
            margin-top: -10px;
        }
    }

    @media(min-width:2126px) {
        .fourthContainer {
            clip-path: circle(1400px at right 1540px);
        }
    }

    @media(min-width:1901px) and (max-width:2125px) {
        .fourthContainer {
            clip-path: circle(1200px at right 1350px);
        }
    }

    @media(min-width:1621px) and (max-width:1900px) {
        .fourthContainer {
            clip-path: circle(1000px at right 1160px);
        }
    }

    @media(min-width:1512px) and (max-width:1620px) {
        .fourthContainer {
            clip-path: circle(740px at right 860px);
        }
    }

    @media(min-width:1340px) and(max-width:1512px) {
        .fourthContainer {
            clip-path: circle(730px at right 700px);
        }
    }

    @media(min-width:1240px) and (max-width:1399px) {
        .navbar-nav {
            padding-left: 640px;
            font-size: 1.1rem;
        }

        .img1 {
            margin-top: -70px;
            padding-left: 230px;
        }

        .Secondcontainer {
            margin-top: -60px;
        }
    }

    @media(min-width:992px) and (max-width:1239px) {
        .fourthContainer {
            clip-path: circle(500px at right 700px);
        }
    }

    @media(min-width:992px) and (max-width:1239px) {
        .navbar-nav {
            padding-left: 490px;
            font-size: 1.1rem;
        }

        .img1 {
            margin-top: -70px;
            padding-left: 200px;
        }
    }

    @media(max-width:991px) {
        .navbar-nav {
            text-align: center;
            font-size: 1.1rem;
            margin-top: 15px;
        }

        .nav-link p {
            color: gold;
        }

        .break1 {
            display: block;
        }

        .break2 {
            display: block;
        }

        .break3 {
            display: block;
        }
    }

    @media(max-width:991px) and (min-width:960px) {
        .fourthContainer {
            clip-path: circle(450px at right 650px);
        }
    }

    @media(max-width:959px) and (min-width:768px) {
        .fourthContainer {
            clip-path: circle(450px at right 690px);
        }
    }

    @media(max-width:767px) and (min-width:458px) {
        .thirdContainer div {
            color: white;
            background-color: #b79d82;
            padding: 7px;
            border-radius: 5px;
        }

        .thirdContainer .fb {
            margin-bottom: 5px;
        }

        .thirdContainer .ins {
            margin-bottom: 5px;
        }

        .thirdContainer .tw {
            margin-top: 5px;
        }
    }

    @media(max-width:457px) {
        .thirdContainer div {
            display: none;
        }
    }

    @media(max-width:767px) and (min-width:660px) {
        .fourthContainer {
            top: 55%;
            clip-path: circle(40.9% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 5px;
            margin-bottom: 3px;
        }
    }

    @media(max-width:659px) and (min-width:436px) {
        .fourthContainer {
            top: 55%;
            clip-path: circle(40.7% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 5px;
            margin-bottom: 3px;
        }
    }

    @media(max-width:435px) and (min-width:335px) {
        .fourthContainer {
            top: 55%;
            clip-path: circle(35.7% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 5px;
            margin-bottom: 3px;
        }

        .img1 img {
            max-width: 300px;
            max-height: 400px;
        }
    }

    @media(width:540px) and (height:720px) {
        .fourthContainer {
            top: 22%;
            clip-path: circle(35.7% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 5px;
            margin-bottom: 3px;
        }

        .img1 img {
            max-width: 300px;
            max-height: 400px;
        }
    }

    @media(width:411px) and (height:731px) {
        .fourthContainer {
            top: 30%;
            clip-path: circle(35.7% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 5px;
            margin-bottom: 3px;
        }

        .img1 img {
            max-width: 300px;
            max-height: 400px;
        }
    }

    @media(width:411px) and (height:823px) {
        .fourthContainer {
            top: 15%;
            clip-path: circle(35.7% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 5px;
            margin-bottom: 3px;
        }

        .img1 img {
            max-width: 300px;
            max-height: 400px;
        }
    }

    @media(width:375px) and (height:812px) {
        .fourthContainer {
            top: 20%;
            clip-path: circle(35.7% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 5px;
            margin-bottom: 3px;
        }

        .img1 img {
            max-width: 300px;
            max-height: 400px;
        }
    }

    @media(width:280px) and (height:653px) {
        .fourthContainer {
            top: 5%;
            clip-path: circle(35.7% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 5px;
            margin-bottom: 3px;
        }

        .img1 img {
            max-width: 300px;
            max-height: 400px;
        }
    }

    @media(max-width:392px) and (min-width:381px) {
        .fourthContainer {
            top: 65%;
            clip-path: circle(35.7% at 50% 94%);
        }
    }

    @media(max-width:334px) {
        .fourthContainer {
            top: 55%;
            clip-path: circle(29.7% at 50% 94%);
        }

        .ImageThumb {
            margin-top: 10px;
            margin-bottom: 3px;
        }
    }

    @media(max-width:991px) and (min-width:730px) {
        .firstContainer {
            padding-top: 110px;
        }
    }

    @media (max-width:991px) and (min-width:768px) {
        .navbar-collapse ul {
            background-color: #b79d82;
        }

        .img1 {
            margin-top: -10px;
            padding-left: 90px;
        }

        .Text1 h2 {
            font-size: 3rem;
            font-weight: 500;
        }

        .Text2 h1 {
            font-size: 3rem;
            font-weight: 500;
        }

        .Text2 span {
            font-size: 4.2rem;
            font-weight: 900;
            padding-left: 15px;
            color: #b79d82;
        }

        .Button button {
            width: 150px;
            height: 40px;
            border: none;
            outline: none;
            background-color: #b79d82;
            border-radius: 30px;
            color: gold;
            font-weight: 600;
        }

        hr {
            background-color: white;
        }

        .img1 img {
            width: 250px;
            height: 420px;
        }
    }

    @media (min-width:992px) {
        .Text1 h2 {
            font-size: 3rem;
            font-weight: 500;
        }

        .Text2 h1 {
            font-size: 3rem;
            font-weight: 500;
        }

        .Text2 span {
            font-size: 4.2rem;
            font-weight: 900;
            padding-left: 15px;
            color: #b79d82;
        }

        .Button button {
            width: 150px;
            height: 40px;
            border: none;
            outline: none;
            background-color: #b79d82;
            border-radius: 30px;
            color: gold;
            font-weight: 600;
        }
    }

    @media (max-width:767px) {
        .firstContainer .imageClass {
            text-align: center;
        }

        .Text1 h2 {
            font-size: 2.8rem;
            font-weight: 500;
        }

        .Text2 h1 {
            font-size: 2.8rem;
            font-weight: 500;
        }

        .Text2 span {
            font-size: 4rem;
            font-weight: 900;
            padding-left: 15px;
            color: #b79d82;
        }

        .Button button {
            width: 150px;
            height: 40px;
            border: none;
            outline: none;
            background-color: #b79d82;
            border-radius: 30px;
            color: gold;
            font-weight: 600;
        }
    }

    @media(max-width:860px)and(min-width:768px) {
        .thirdContainer {
            position: fixed;
            right: 1%;
        }
    }

    @media(max-width:767px) {
        .nav-link p {
            color: gold;
        }

        .firstContainer {
            padding-top: 130px;
        }

        hr {
            background-color: rgb(4, 88, 44);
        }
    }

    @media (max-width:380px) {
        .Text1 h2 {
            font-size: 2.5rem;
        }

        .Text2 h1 {
            font-size: 2.5rem;
        }

        .Text2 span {
            font-size: 3.6rem;
            padding-left: 6px;
        }
    }

    @media(max-width:354px) {
        .Text1 h2 {
            font-size: 2rem;
        }

        .Text2 h1 {
            font-size: 2rem;
        }

        .Text2 span {
            font-size: 3rem;
            padding-left: 4px;
        }
    }

    @media(width:320px) and (height:568px) {
        .fourthContainer {
            top: 95%;
            clip-path: circle(75.7% at 52% 100%);
        }
    }

    @media(max-width:300px) {
        .img1 img {
            width: 250px;
            height: 350px;
        }

        .Button button {
            width: 150px;
            height: 40px;
            border: none;
            outline: none;
            background-color: #b79d82;
            border-radius: 30px;
            color: gold;
            font-weight: 600;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            -ms-border-radius: 30px;
            -o-border-radius: 30px;
        }

        .Text1 h2 {
            font-size: 1.6rem;
        }

        .Text2 h1 {
            font-size: 1.6rem;
        }

        .Text2 span {
            font-size: 2.8rem;
            padding-left: 4px;
        }
    }

    .animasi-teks {
        font-size: 29px;
        width: 100%;
        white-space: nowrap;
        overflow: hidden;
        -webkit-animation: typing 4s steps(70, end)infinite;
        animation: animasi-ketik 4s steps(70, end)infinite;
    }

    @keyframes animasi-ketik {
        from {
            width: 0;
        }
    }

    @-webkit-keyframes animasi-ketik {
        from {
            width: 0;
        }
    }
    </style>
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-light fixed-top " style="background-color:#b79d82;">
        <div class="container my-2">
            <a class="navbar-brand" href="#" style="color:gold;font-family: 'Sail', cursive;">
                <img src=" {{asset('admlte/img/logo.png')}}" style="width:80px; height: 80px;">Cafe Ngopi

            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <input id="cbtn" type=checkbox>
                <label for="cbtn" class="menu-btn">
                    <i class="fa  fa-bars fa-lg "></i>
                </label>


            </button>

            <a class="nav-link " href="#">
                <p>Rajanya Kopi Kekinian</p>
            </a>





        </div>
        </div>
    </nav>

    <div class="container mt-5 firstContainer ">

        <div class="row g-4 ">
            <div class="col-12 col-md-6 col-lg-5 col-xl-5 col-xxl-5">
                <div class="animasi-teks">
                    <div class="Text1">
                        <h2 style="font-family: 'Sail', cursive;">Selamat Datang </h2>
                    </div>
                </div>
                <div class="animasi-teks">
                    <div class="Text2">
                        <h1 style="font-family: 'Sail', cursive;">Di<span>Cafe Ngopi</span></h1>
                        <div class="Button">
                            <a href="/login"><button>Login</button></a>
                        </div>
                    </div>
                    <br>
                    <div class="animasi-teks">
                        <p style="font-family: 'Sail', cursive;">

                            Login sesuai akun yang telah diberikan.

                        </p>

                    </div>

                </div>



            </div>
            <div class="col-12 col-md-6 col-lg-7 col-xl-7 col-xxl-7 imageClass">
                <div class="img1 ">
                    <img src="{{asset('admlte/img/img1.png')}}" id="imagE">
                </div>


            </div>


        </div>
        <div class="row">
            <div class="Secondcontainer ">
                <div class="row ">
                    <div class="col-8 col-md-4 col-lg-3 col-xl-2 col-xxl-2 mx-auto d-flex    ImageThumb"
                        style="justify-content: center;align-items: center;">
                        <img src="{{asset('admlte/img/img1.png')}}" style="max-width: 80px;"
                            onclick="ImageChange('admlte/img/img1.png' ) ;ChangeBackground('#b79d82')">
                        <img src="{{asset('admlte/img/img2.png')}}" style="max-width: 80px;"
                            onclick="ImageChange('admlte/img/img2.png' );ChangeBackground('#cb9663')">
                        <img src="{{asset('admlte/img/img3.png')}}" style="max-width: 80px;"
                            onclick="ImageChange('admlte/img/img3.png' );ChangeBackground('#81694f')">


                    </div>


                </div>



            </div>

        </div>

        <div class="thirdContainer ">
            <div class="fb"><a href=""><i class="fab fa-facebook-f fa-lg" style="color: gold;"></i></a></div>
            <div class="ins"><a href=""><i class="fab fa-instagram fa-lg" style="color: gold;"></i></a>
            </div>
            <div class="tw"><a href=""><i class="fab fa-twitter fa-lg" style="color: gold;"></i></a></div>

        </div>



    </div>
    <div class="fourthContainer" id="fourthContain">


    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
    var ImageRemover = document.getElementById('imagE')
    var ColorChange = document.getElementById('fourthContain')

    function ImageChange(anything) {
        ImageRemover.src = anything;



    }

    function ChangeBackground(color) {
        ColorChange.style.background = color;



    }
    </script>

</body>


</html>