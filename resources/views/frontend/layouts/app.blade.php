<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <title>@yield('title','Tiny coders' )</title>
            <link rel="shortcut icon" type="image/x-icon"href="{{asset('style/images/logo.png')}}"/>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="Free-Template.co" />

  <link rel="shortcut icon" href="{{asset('style/images/ftco-32x32.png')}}">
  <link rel="stylesheet" href="{{asset('style/css/social.css')}}">
  <link rel="stylesheet" href="{{asset('style/css/jquery.fancybox.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/fonts/ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/fonts/fontawesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('style/fonts/flaticon/font/flaticon.css')}}">
 <link rel="stylesheet" href="{{asset('style/css/style.css')}}">

  <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display:400,400i|Roboto+Mono&display=swap" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" type="text/css">
  <!-- Theme Style -->
 
      <link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=cocon-next-arabic" />
   @yield('style')
</head>

<body dir="rtl" style="font-family:'cocon-next-arabic';">

  <header role="banner">
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " href="{{ route('index') }}">Tiny coders</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
          aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

   
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
  
            <li class="nav-item">
              <a class="nav-link" href="{{ route('userWorkshop.index') }}">الدورات</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="https://salla.sa/tiny_coders">المتجر</a>
            </li>
                {{-- <li class="nav-item">
              <a class="nav-link" href="portfolio.html">حجز موعد</a>
            </li> --}}
                <li class="nav-item">
              <a class="nav-link" href="{{ route('photo') }}">معرض الصور</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('allBlog') }}"> المدونة</a>
            </li>
            </li>
              @guest
              <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">تسجيل دخول</a>
            </li>
            @else
            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               
                            @if(auth()->user()->hasRole('admin'))
                                   <a class="dropdown-item" href=" {{ route('dashbord') }}"
                                       >
                                      لوحة التحكم
                                    </a>
                                    @endif
                                       @if(auth()->user()->hasRole('student'))
                                   <a class="dropdown-item" href=" {{ route('user-info.index') }}"
                                       >
                                      لوحة معلوماتي
                                    </a>
                                    @endif
                                         <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       تسجيل خروج
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                     </div>
                            </li>
            @endguest
                <li class="nav-item">
              <a class="nav-link" href="{{ route('about-us') }}">من نحن</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('contact-us.index') }}">تواصل معنا</a>
            </li>
          </ul>

          <div class="navbar-nav ml-auto">
           <form method="GET"  class="search-form"  action="{{ route('search') }}">
              @csrf
              <span class="icon ion ion-search"></span>
              <input type="text"  name="search" class="form-control" placeholder="البحث عن ...">
                {{-- <button type="submit"  style="display:hidden;"> hi</button> --}}
            </form>
          </div>

        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->
    <section class="content">
  @yield('content')
     </section>
  <section >
   @yield('footer')
@extends('frontend.layouts.footer')
     </section>
  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#ffc107" /></svg></div>

  <section class="script">
   @yield('script')
@extends('frontend.layouts.script')
     </section>
  
</body>

</html>