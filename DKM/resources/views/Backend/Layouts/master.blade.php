<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Madrasha Dashboard </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('Backend/assets/plugin/parsleyjs/css/parsley.css')}}">
    <link rel="stylesheet" href="{{ asset('Backend/assets/css/my-task.style.min.css')}}">
</head>

<body>
    <div id="mytask-layout" class="theme-indigo">

        @include('Backend.Layouts.sidebar')

        <!-- main body area -->
        <div class="main px-lg-4 px-md-4">

            @include('Backend.layouts.header')
            @yield('headerFooter')
            @include('Backend.layouts.footer')
