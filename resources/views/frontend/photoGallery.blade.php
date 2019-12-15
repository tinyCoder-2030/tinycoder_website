@extends('frontend.layouts.app')

@section('content')

  <div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/photo.jpg')}});font-family:'cocon-next-arabic';">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center text-center">
        <div class="col-lg-12 col-sm-12">
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay=""style="font-family:'cocon-next-arabic';"> معرض الصور </h1>
          <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100"><a href="{{ route('index') }}" style="font-family:'cocon-next-arabic';">الصفحة الرئيسية</a> <span class="mx-3"style="font-family:'cocon-next-arabic';">\</span> تواصل معنا</p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-wrap" style="background-color:white;margin-top:50px;">
  
  

  <main class="main-content" >
    <div class="container-fluid photos">
      <div class="row align-items-stretch">
        @foreach ($photos as $photo )
            
  
        <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
          <a href="{{$photo->image()}}" class="d-block photo-item" data-fancybox="gallery">
            <img src="{{$photo->image()}}" alt="Image" class="img-fluid">
            <div class="photo-text-more">
            <h1 style="color:white; font-family:'cocon-next-arabic';"> {{$photo->title}}</h1>
            <h4 style="color:white;font-family:'cocon-next-arabic';"> {!! $photo->description !!}</h4>
              <span class="icon icon-search"></span>
            </div>
          </a>
        </div>
              @endforeach
 
      </div>

    </div>
  </main>

</div> <!-- .site-wrap -->


   @endsection

   @section('style')
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{('photostyle/fonts/icomoon/style.css')}}">

    {{-- <link rel="stylesheet" href="{{('photostyle/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{('photostyle/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{('photostyle/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{('photostyle/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{('photostyle/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{('photostyle/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{('photostyle/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{('photostyle/css/aos.css')}}">
    <link rel="stylesheet" href="{{('photostyle/css/jquery.scrollbar.css')}}">
    <link rel="stylesheet" href="{{('photostyle/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{('photostyle/css/swiper.min.css')}}">

    <link rel="stylesheet" href="{{('photostyle/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=cocon-next-arabic" />
   @endsection
   @section('script')
 <script src="{{('photostyle/is/jquery-3.3.1.min..js')}}></script>
  <script src="{{('photostyle/is/jquery-migrate-3.0.1.min..js')}}></script>
  <script src="{{('photostyle/is/jquery-ui..js')}}></script>
  <script src="{{('photostyle/is/popper.min..js')}}></script>
  <script src="{{('photostyle/is/bootstrap.min..js')}}></script>
  <script src="{{('photostyle/is/owl.carousel.min..js')}}></script>
  <!-- <script src="{{('photostyle/is/jquery.stellar.min..js')}}></script> -->
  <script src="{{('photostyle/is/jquery.countdown.min..js')}}></script>
  <script src="{{('photostyle/is/jquery.magnific-popup.min..js')}}></script>
  <script src="{{('photostyle/is/bootstrap-datepicker.min..js')}}></script>
  <script src="{{('photostyle/is/aos..js')}}></script>

  <script src="{{('photostyle/is/jquery.fancybox.min..js')}}></script>
  <script src="{{('photostyle/is/swiper.min..js')}}></script>
  <script src="{{('photostyle/is/jquery.scrollbar..js')}}></script>
  <script src="{{('photostyle/is/main..js')}}></script>
   @endsection