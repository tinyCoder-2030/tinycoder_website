  	@extends('frontend.layouts.app')

@section('content')
<div class="super_container">
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/blogshow.jpg')}});font-family:'cocon-next-arabic';">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center text-center">
        <div class="col-lg-12 col-sm-12">
          <h1 class="mb-4" data-aos="fade-up" data-aos-delay="" style="font-family:'cocon-next-arabic';"> المدونة </h1>
          <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100" style="font-family:'cocon-next-arabic';"><a href="{{ route('index') }}" style="font-family:'cocon-next-arabic';">الصفحة الرئيسية</a> <span class="mx-3" style="font-family:'cocon-next-arabic';">\</span>المدونة </p>
        </div>
      </div>
    </div>
  </div>
	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Column -->

				<div class="col-lg-12">
					
					<div class="news_posts">
                    @foreach ($blogs as $blog )
    
						<!-- News Post -->
						<div class="news_post">
                        
						   <div class="news_post_title text-center">
  	                                <a style="color:#b6432e">{{$blog->title}}</a>
  	                            </div>
  	                            <div class="section_title text-center">
  	                                <h1> </h1>
  	                            </div>
							<div class="news_post_image">
                            	
							 @if($blog->image())
									<img src="{{$blog->image()}}" alt="">
                  @else
									<img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
                   @endif
							</div>
							<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center text-aligin-center justify-content-center">
										<div><strong>{{$blog->created_at->day}} <strong></div>
										<div><strong>{{$blog->created_at->month}}</strong></div>
                                      	<div><strong>{{$blog->created_at->year}}</strong></div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<p style="color:#000000;font-family:'cocon-next-arabic';" >{{$blog->title}}</p>
									</div>
									<div class="news_post_meta" style="color:#b6432e;margin-right:5px;"><a class="trans_200" href="#"></a>{{$blog->user->name}}
										
									</div>
								</div>
							</div>
							<div class="news_post_text"dir="rtl"style="text-align:right;">
							<span  style="color:#000000;">{{$blog->abstract}}</span>
							</div>
							<div class="news_post_button text-center trans_200">
								<a href="{{route('allBlog.show',$blog->id)}}" >التفاصيل</a>
							</div>
						</div>
@endforeach

                {{ $blogs->links() }}		

					<!-- Page Nav -->

					
				</div>

			</div>
		</div>
	</div>


</div>
@endsection
   @section('style')
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" type="text/css" href="{{asset('course/styles/news_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('course/styles/news_responsive.css')}}">
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
<script src="{{asset('course/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('course/styles/bootstrap4/popper.js')}}"></script> 
{{-- <script src="{{asset('course/styles/bootstrap4/bootstrap.min.js')}}"></script> --}}
<script src="{{asset('course/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('course/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('course/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('course/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('course/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('course/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('course/plugins/scrollTo/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('course/plugins/easing/easing.js')}}"></script>
<script src="{{asset('course/js/custom.js')}}"></script>
<script src="{{asset('course/js/news_custom.js')}}"></script>
   @endsection