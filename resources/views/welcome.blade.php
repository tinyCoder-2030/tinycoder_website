@extends('frontend.layouts.app')

@section('content')

  <div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/hero.png')}})">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <p data-aos="fade-up" data-aos="fade-up" data-aos-delay="">المبرمجون الصغار</p>
          <p class="mb-4" data-aos="fade-up" data-aos-delay="100"style="font-size:30px;">هدفنا نشر المفاهيم البرمجية والتفكير المنطقي بين أطفالنا</p>
          <div class="btn-play-wrap mx-auto" data-aos="fade-up" data-aos-delay="200">
            <a href="https://youtu.be/ckzm98yXB5E" data-fancybox data-ratio="2"
                class="btn-play"><span class="ion ion-ios-play"></span></a>
          </div>

        </div>
      </div>
    </div>
  </div>

  

  

  <div class="section portfolio-section">
    <div class="container">
      <div class="row mb-5 justify-content-center" data-aos="fade-up">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title">Latest Work</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis accusamus perferendis
            libero accusantium nisi.</p>
          <p><a href="#">View All Portfolio</a></p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row mb-5 no-gutters">
      @foreach ($workshops as $workshop)
          
     
        <div class="col-sm-6 col-md-6 col-lg-6" data-aos="fade" data-aos-delay="100">
          <a href="portfolio-single.html" class="work-thumb">
            <div class="work-text">
              <h2>{{$workshop->name}}</h2>
              <p>{{$workshop->from_date}}</p>
            </div>
            @if($workshop->image())
            <img src="{{$workshop->image()}}" style="height:400px;width:100%;"alt="Image" class="img-fluid">
            @endif
          </a>
        </div>
 @endforeach
       
      
      <div class="row mt-5">
        <div class="col-12 text-center">
          <p><a href="portfolio.html" class="btn btn-outline-white px-4 py-3">More Portfolio</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 ml-auto mb-5 order-2">
          <span class="d-block text-uppercase text-primary">Who We Are</span>
          <h2 class="mb-4 section-title">Do Things That Matters. Plan. Create. Grow.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id autem temporibus blanditiis accusamus perferendis libero accusantium nisi itaque tempore, harum aliquid aut, sapiente dolor tenetur. Tempora corrupti suscipit delectus perspiciatis!</p>
          <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>
          <p><a href="#" class="btn btn-outline-black">Learn More</a></p>
        </div>
        <div class="col-lg-6 order-1">
          <figure class="img-dotted-bg">
            <img  src="{{asset('style/images/about_1.jpg')}}"alt="Image" class="img-fluid">

            <img src="{{asset('style/images/work_1.jpg')}}"alt="Image" class="img-fluid img-absolute" data-aos="fade-left">

          </figure>

        </div>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="">
            <span class="icon icon-magnet mb-4 d-block"></span>
            <h3>Designing</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="100">
            <span class="icon icon-screen-desktop mb-4 d-block"></span>
            <h3>Branding Identity</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="200">
            <span class="icon icon-screen-smartphone mb-4 d-block"></span>
            <h3>Mobile Application</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
        <div class="col-lg-3 mb-4">
          <div class="service" data-aos="fade-up" data-aos-delay="300">
            <span class="icon icon-magnifier mb-4 d-block"></span>
            <h3>Search Engine</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias id volume amet.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section  block-11" dir="ltr">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-8 text-center">
          <h2 class="mb-4 section-title" >اعضاء الفريق</h2>
        </div>
      </div>
      <div class="nonloop-block-11 owl-carousel" style="height:90%;">
      @foreach($testimonials as $testimonial)
        <div class="item" style="  border-radius:25px;border-right: 2px solid #fa983a;border-left: 2px solid #fa983a;border-top: 2px solid #b6432e;border-bottom: 2px solid #b6432e;">
          <div class="block-33" >
            <div class="vcard d-flex mb-3" >
              <div class="image align-self-center"><img src="{{$testimonial->image()}}"alt="Person here"></div>
              <div class="name-text align-self-center">
                <h2 class="heading">{{$testimonial->name}}</h2>
                <span class="meta"> {{ $testimonial->occupation }}</span>
              </div>
            </div>
            <div class="text" style="direction:rtl;text-alignment:center;">

                <p style="direction:rtl;"> {!! $testimonial->content !!}</p>
             
            </div>
          </div>
        </div>
@endforeach
       
      </div>
    </div>
  </div>
  <!-- END .block-4 -->
  </div>

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