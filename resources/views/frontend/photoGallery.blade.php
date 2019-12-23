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

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{('css/photo.css')}}">

<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=cocon-next-arabic" />
   @endsection
   @section('script')
 

   @endsection