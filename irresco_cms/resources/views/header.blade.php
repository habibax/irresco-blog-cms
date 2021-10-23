<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>C&G Iran</title>

    <link rel="preconnect" href="//fdn.fontcdn.ir">
    <link rel="preconnect" href="//v1.fontapi.ir">
    <link href="https://v1.fontapi.ir/css/Yekan" rel="stylesheet">


    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.rtl.min.css')}}" rel="stylesheet"  crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('assets/img/favicons/apple-touch-icon.png')}}" sizes="180x180">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog.rtl.css')}}" rel="stylesheet">
    <link href="{{asset('css/irescoHeader.css')}}" rel="stylesheet">
</head>
<body>

<div class="container" >
    <header class="blog-header py-3" >
        <div class="row flex-nowrap justify-content-between align-items-center" >
            <div class="col-2 pt-1">
                <a class="link-secondary" href="#">نمیدونم چیچی</a>
            </div>
            <div class="col-8 text-center">
                <a class="blog-header-logo text-dark ir_maintitle"  href="#">مرجع تخصصی کربن و گرافیت ایران</a>
            </div>
            <div class="col-2 d-flex justify-content-end align-items-center">
                <a class="link-secondary" href="#" aria-label="بحث">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>بحث</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="#">ثبت نام</a>
            </div>
        </div>
    </header>

    <div class="nav-scroller py-1 mb-2 ">
        <nav class="nav navbar-light d-flex justify-content-start" style="background-color: #a1d4f6;">
            @foreach ($navbars as $navbarItem)
                <li class="nav-item">
                    <a class="nav-link" href="{{ route($navbarItem->route) }}">{{ $navbarItem->name }}</a>
                </li>
            @endforeach
            <a class="p-2 link-secondary" href="#">کربن</a>
            <a class="p-2 link-secondary" href="#">گرافیت</a>
            <a class="p-2 link-secondary" href="#">درباره ما</a>
            <a class="p-2 link-secondary" href="#">فروشگاه</a>
        </nav>
    </div>


{{--    <div class="p-4 p-md-5 mb-4 text-white rounded " style="height: 300px ; background-image:url("{{asset('images/header.jpg')}}")" >--}}
        <img src="{{asset('images/headertest.jpg')}}" class="img-fluid" height="300px" alt="header place holder">
{{--    </div>--}}



</div>

