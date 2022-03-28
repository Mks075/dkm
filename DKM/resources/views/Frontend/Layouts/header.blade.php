<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('Frontend/fontawesome/css/all.css')}}">
    <title>Darussunnah Kamil (M.A) Madrasah </title>
    <link rel="stylesheet" href="{{ asset('Frontend/CustomCSS/font/font.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/CustomCSS/style.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/CustomCSS/HeaderStyle.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/CustomCSS/NavStyle.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/CustomCSS/Sec1Style.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/CustomCSS/FooterStyle.css')}}">
    <link rel="stylesheet" href="{{ asset('Frontend/bootstrap5/css/bootstrap.min.css')}}">
    <style>
        .left_card li{
            list-style-image: url("{{ asset('img/bullet_arrow.png') }}");
        }
        .noticeBoard li{
            list-style-image: url("{{ asset('img/bullet_arrow.png') }}");
        }
        .box li{
            list-style-image: url("{{ asset('img/bullet_arrow.png') }}");
        }
        .noticeBoard::before{
            background-position: 0 0;
            background-repeat: no-repeat;
            background-image: url("{{ asset('img/bg_notice_board.png') }}") , linear-gradient(to bottom, #ffffff 0%, #ebebeb 100%);
            z-index: 1000;
        }
    </style>
</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="hLogg float-start">
                        <img class="" src="{{ asset('img/1stLogo.png')}}" alt="{{ asset('img/1stLogo.png')}}">
                    </div>
                </div>
                <div class="col">
                    <div class="title">
                        <h1 class="hTitleA">Darussunnah Kamil (M.A) Madrasah (Arabic)</h1>
                        <h1 class="hTitleB">Darussunnah Kamil (M.A) Madrasah (Bangla)</h1>
                        <h1 class="hTitleE">Darussunnah Kamil (M.A) Madrasah</h1>
                        <div class="hadd">1400 Narayanganj, Dhaka Division, Bangladesh</div>
                        <div class="hNumber">Principal Call : +880 1718 723179, Office : 01913471955</div>
                        <div class="hEmail">
                            <span>Email: darussunnah16@gmail.com</span>
                            <span>Website: http://www.daskm.edu.bd/</span>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="hLogg float-end">
                        <img class="" src="{{ asset('img/1stLogo.png')}}" alt="{{ asset('img/1stLogo.png')}}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="hcode d-flex">
                        <div class="col">Madrasha Code - 11145</div>
                        <div class="col">EIIN No - 112469</div>
                        <div class="col">Police station Code - 125</div>
                        <div class="col">Distric Code - 12</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-5 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa fa-home"
                                aria-hidden="true"></i>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
