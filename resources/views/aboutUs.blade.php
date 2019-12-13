@extends('frontend.layouts.app')

@section('content')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/aboutus.jpg')}});">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center text-center">
        <div class="col-lg-12 col-sm-12">
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="">نبذه عنا</h1>
          <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100"><a href="index.html">الرئيسية</a> <span class="mx-3">/</span> نبذه عنا</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 order-md-2" data-aos="fade-up" data-aos-delay="100">
          <figure class="img-dotted-bg">
            <img src="{{asset('style/images/vision.png')}}" alt="Image" class="img-fluid">
          </figure>
        </div>
        <div class="col-md-5 mr-auto" data-aos="fade-up" data-aos-delay="" style="text-align:center;font-family:'cocon-next-arabic';">
          <h2 class="mb-4 section-title"><strong style="text-align:center;font-family:'cocon-next-arabic';">الهدف</strong></h2>
          <p style="background-color:#FED36B;color:white;padding:20px;border-radius:25px;">{!! $aboutus->goal!!}</p>
          <h2 class="mb-4 section-title"><strong style="text-align:center;font-family:'cocon-next-arabic';">الرؤية</strong></h2>
          <p style="background-color:#77D0F8;color:white;padding:20px;border-radius:25px;">{!! $aboutus->vision!!}</p>
            <h2 class="mb-4 section-title"><strong style="text-align:center;font-family:'cocon-next-arabic';">الرسالة</strong></h2>
          <p style="background-color:#BBDA73;color:white;padding:20px;border-radius:25px;">{!! $aboutus->message!!}</p>
        </div>
        
      </div>
    </div>
  </div>

  
  
  <div class="section" >
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center" data-aos="fade-up" data-aos-delay="">
          <h2 class="mb-4 section-title" style="font-family:'cocon-next-arabic';">تعرف على <strong>فريقنا</strong></h2>
        </div>
      </div>
      <div class="row">
       @foreach($testimonials as $testimonial)
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="media d-block media-custom text-center">
            <a href="#"><img src="{{$testimonial->image()}}" alt="Image Placeholder" class="img-fluid"></a>
            <div class="media-body">
              <h3 class="mt-0 text-black">{{$testimonial->name}}</h3>
              <h4 class="mt-0 text-black">{{ $testimonial->occupation }}</h4>
              <p>{!! $testimonial->content !!}</p>
            </div>
          </div>
        </div>
      @endforeach
      </div>
  
    </div>
  </div>
  <!-- END section -->

  
       

  <div class="bg-primary py-5">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <h3 class="text-white mb-2 font-weight-normal" data-aos="fade-right" data-aos-delay="">Let's do more together</h3>
          <p class="text-white mb-4" data-aos="fade-right" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
          <p class="mb-0" data-aos="fade-right" data-aos-delay="200"><a href="contact.html" class="btn btn-outline-white px-4 py-3">Get In Touch!</a></p>
        </div>
      </div>

    </div>
  </div>
@endsection