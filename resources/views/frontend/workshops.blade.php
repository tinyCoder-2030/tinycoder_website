	@extends('frontend.layouts.app')

@section('content')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/courses.jpg')}});font-family:'cocon-next-arabic';">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center text-center">
        <div class="col-lg-12 col-sm-12">
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="" style="font-family:'cocon-next-arabic';"> ورش العمل والدورات </h1>
          <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100"><a href="{{ route('index') }}" style="font-family:'cocon-next-arabic';">الصفحة الرئيسية</a> <span class="mx-3" style="font-family:'cocon-next-arabic';">\</span>ورش العمل والدورات </p>
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
				
						
						</div>
						
							
					
					</div>
				</div>
 @endforeach
			<div class="mt-5">
 {{ $workshops->links() }}
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