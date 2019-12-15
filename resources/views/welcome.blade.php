@extends('frontend.layouts.app')

@section('content')

  <div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/hero.png')}})">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
          <p data-aos="fade-up" data-aos="fade-up" data-aos-delay="" style="font-family:'cocon-next-arabic';">المبرمجون الصغار</p>
          <p class="mb-4" data-aos="fade-up" data-aos-delay="100"style="font-size:30px;font-family:'cocon-next-arabic';">هدفنا نشر المفاهيم البرمجية والتفكير المنطقي بين أطفالنا</p>
          <div class="btn-play-wrap mx-auto" data-aos="fade-up" data-aos-delay="200">
            <a href="https://youtu.be/ckzm98yXB5E" data-fancybox data-ratio="2"
                class="btn-play"><span class="ion ion-ios-play"></span></a>
          </div>

        </div>
      </div>
    </div>
  </div>




	<div class="popular page_section" dir="rtl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1 style="font-family:'cocon-next-arabic';">ورش العمل والدورات</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				  @foreach ($workshops as $workshop)
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
           @if($workshop->image())
            
						<img class="card-img-top" style="height:200px;width:100%;" src="{{$workshop->image()}}" >
            @endif
						<div class="card-body text-center">
							<div class="card-title"><a href="courses.html" style="font-family:'cocon-next-arabic'">{{$workshop->name}}</a></div>
							<div class="card-text" style="font-family:'cocon-next-arabic'">{{$workshop->from_date}}</div>
              @if($workshop->price==null ||$workshop->price=='')
              <div class="course_price d-flex flex-column align-items-center justify-content-center" style="margin-right: auto;height: 40px;font-family:'cocon-next-arabic'"><span>مجانية</span></div>
					@else
           <div class="course_price d-flex flex-column align-items-center justify-content-center" style="margin-right: auto;height: 40px;"><span>SR {{$workshop->price}}</span></div>
          @endif
          	</div>
            		<div class="price_box d-flex flex-row align-items-center"style=" padding-right: 35px;">
            	<div class="buttons_container" style="width:100%;background-color:black;color:white;">
            <div class="button  text-center "style="width:100%;color:white;"><a href="#" style="width:100%;color:white;font-family:'cocon-next-arabic'">التسجيل</a></div>
            </div>
							{{-- <div class="course_author_image">
								<img src="images/author.jpg" alt="https://unsplash.com/@mehdizadeh">
							</div>
							<div class="course_author_name">Michael Smith, <span>Author</span></div> --}}
						
						</div>
						
							
					
					</div>
				</div>
 @endforeach
			
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


<div class="testimonials page_section" dir="ltr"  style="font-family:'cocon-next-arabic';">
    <div class="testimonials_background_container prlx_parent">
        <div class="testimonials_background prlx" style="background-image:url(style/images/testimonial.jpg)">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1  style="font-family:'cocon-next-arabic';">اعضاء الفريق</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">

                <div class="testimonials_slider_container">

                    <!-- Testimonials Slider -->
                    <div class="owl-carousel owl-theme testimonials_slider" >
                        @foreach($testimonials as $testimonial)
                        <!-- Testimonials Item -->
                        <div class="owl-item" style="font-family:'cocon-next-arabic';">
                            <div class="testimonials_item text-center">
                                <div class="quote">“</div>
                                <p class="testimonials_text"  style="font-family:'cocon-next-arabic';">{!! $testimonial->content !!}</p>
                                <div class="testimonial_user">
                                    <div class="testimonial_image mx-auto">
                                        <img src="{{$testimonial->image()}}" alt="">
                                    </div>
                                    <div class="testimonial_name"  style="font-family:'cocon-next-arabic';">{{$testimonial->name}}</div>
                                    <div class="testimonial_title"  style="font-family:'cocon-next-arabic';">{{ $testimonial->occupation }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
</div>
    </div>
</div>

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
   @section('style')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <link rel="stylesheet" type="text/css" href="{{('course/styles/bootstrap4/bootstrap.min.css')}}"> --}}
<link href="{{('course/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet')}}" type="text/css">
<link rel="stylesheet" type="text/css" href="{{('course/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{('course/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{('course/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{('course/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{('course/styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=cocon-next-arabic" />
<style>
.owl-carousel .owl-dots.disabled,
.owl-carousel .owl-nav.disabled {
    display: none
}
.owl-carousel .owl-dot,
.owl-carousel .owl-nav .owl-next,
.owl-carousel .owl-nav .owl-prev {
    cursor: pointer;
    cursor: hand;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}
.owl-carousel .owl-nav button.owl-next,
.owl-carousel .owl-nav button.owl-prev,
.owl-carousel button.owl-dot {
    background: 0 0;
    color: inherit;
    border: none;
    padding: 0 !important;
    font: inherit
}
</style>
   @endsection
   @section('script')
<script src="{{('course/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{('course/styles/bootstrap4/popper.js')}}"></script>
<script src="{{('course/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{('course/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{('course/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{('course/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{('course/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{('course/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{('course/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{('course/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{('course/plugins/easing/easing.js')}}"></script>
<script src="{{('course/js/custom.js')}}"></script>
   @endsection