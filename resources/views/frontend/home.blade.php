@extends('frontend.layouts.app')

@section('content')

<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/hero.png')}})">
    <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-12 text-center col-sm-12">
                <p data-aos="fade-up" data-aos="fade-up" data-aos-delay="" style="font-family:'cocon-next-arabic';">
                    المبرمجون الصغار</p>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="100"
                    style="font-size:30px;font-family:'cocon-next-arabic';">هدفنا نشر المفاهيم البرمجية والتفكير المنطقي
                    بين أطفالنا</p>
                <div class="btn-play-wrap mx-auto" data-aos="fade-up" data-aos-delay="200">
                    <a href="https://youtu.be/ckzm98yXB5E" data-fancybox data-ratio="2" class="btn-play"><span
                            class="ion ion-ios-play"></span></a>
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

                    <img class="card-img-top" style="height:200px;width:100%;" src="{{$workshop->image()}}">
                    @endif
                    <div class="card-body text-center">
                        <div class="card-title"><a href="courses.html"
                                style="font-family:'cocon-next-arabic'">{{$workshop->name}}</a></div>
                        <div class="card-text" style="font-family:'cocon-next-arabic'">{{$workshop->from_date}}</div>
                        @if($workshop->price==null ||$workshop->price=='')
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"
                            style="margin-right: auto;height: 40px;font-family:'cocon-next-arabic'"><span>مجانية</span>
                        </div>
                        @else
                        <div class="course_price d-flex flex-column align-items-center justify-content-center"
                            style="margin-right: auto;height: 40px;"><span>SR {{$workshop->price}}</span></div>
                        @endif
                    </div>
                    <div class="price_box d-flex flex-row align-items-center" style=" padding-right: 35px;padding-top:20px;padding-bottom:20px;">
                        <div class="buttons_container" style="width:100%;background-color:black;color:white;margin:0px;">
                            <div class="button  text-center " style="width:100%;color:white;"><a href="#"
                                    style="width:100%;color:white;font-family:'cocon-next-arabic'">التسجيل</a>
								
					</div>
                        </div>
                       
                    </div>



                </div>
            </div>
            @endforeach
			<div class="mt-5">
 {{ $workshops->links() }}
 </div>
        </div>
        <div class="section_title text-center mt-5">
            <h1> </h1>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 ml-auto mb-5 order-2">
                    <span class="d-block text-uppercase text-primary">Who We Are</span>
                    <h2 class="mb-4 section-title">Do Things That Matters. Plan. Create. Grow.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id autem temporibus blanditiis accusamus
                        perferendis libero accusantium nisi itaque tempore, harum aliquid aut, sapiente dolor tenetur.
                        Tempora corrupti suscipit delectus perspiciatis!</p>
                    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, voluptatibus.</p>
                    <p><a href="#" class="btn btn-outline-black">Learn More</a></p>
                </div>
                <div class="col-lg-6 order-1">
                    <figure class="img-dotted-bg">
                        <img src="{{asset('style/images/about_1.jpg')}}" alt="Image" class="img-fluid">

                        <img src="{{asset('style/images/work_1.jpg')}}" alt="Image" class="img-fluid img-absolute"
                            data-aos="fade-left">

                    </figure>

                </div>
            </div>
        </div>
    </div>


    <div class="testimonials page_section" dir="ltr" style="font-family:'cocon-next-arabic';">
        <div class="testimonials_background_container prlx_parent">
            <div class="testimonials_background prlx" style="background-image:url(style/images/testimonial.jpg)">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title text-center">
                        <h2 style="font-family:'cocon-next-arabic';color:white;size:30px">اعضاء الفريق</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">

                    <div class="testimonials_slider_container">

                        <!-- Testimonials Slider -->
                        <div class="owl-carousel owl-theme testimonials_slider">
                            @foreach($testimonials as $testimonial)
                            <!-- Testimonials Item -->
                            <div class="owl-item" style="font-family:'cocon-next-arabic';">
                                <div class="testimonials_item text-center">
                                    <div class="quote">“</div>
                                    <p class="testimonials_text" style="font-family:'cocon-next-arabic';">{!!
                                        $testimonial->content !!}</p>
                                    <div class="testimonial_user">
                                        <div class="testimonial_image mx-auto">
                                            <img src="{{$testimonial->image()}}" alt="">
                                        </div>
                                        <div class="testimonial_name" style="font-family:'cocon-next-arabic';">
                                            {{$testimonial->name}}</div>
                                        <div class="testimonial_title" style="font-family:'cocon-next-arabic';">
                                            {{ $testimonial->occupation }}</div>
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
<div class="events page_section">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                    <h1 style="font-family:'cocon-next-arabic';">المدونة</h1>
                </div>
            </div>
        </div>

        <div class="event_items">

            @foreach ($blogs as $blog )

            {{-- style="border:1px solid #b6432e;" --}}
            <!-- Event Item -->

            <a class="trans_200 " href="#">
                <div class="row event_item  effect" dir="ltr">
                    <div class="col">
                        <div class="row d-flex flex-row align-items-end">

                            <div class="col-lg-2 order-lg-1 order-2">
                                <div class="event_date d-flex flex-column align-items-center justify-content-center">
                                    <div class="event_day">{{$blog->created_at->day}}</div>
                                    <div class="event_month">{{$blog->created_at->month}}</div>
                                    <div class="event_month">{{$blog->created_at->year}}</div>
                                </div>
                            </div>

                            <div class="col-lg-6 order-lg-2 order-3">
                                <div class="event_content">
                                    <div class="event_name"style="color:#b6432e"><a class="trans_200" href="#"></a>{{$blog->user->name}}
                                    </div>
                                    <div class="event_location">{{$blog->title}}</div>
                                    <p dir="rtl"style="text-align:right;font-family:'cocon-next-arabic';">{{$blog->abstract}}</p>
                                    <div class="buttons ">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="buttons_container mt-5 ">
                                                        <div class="button button_color_1 text-center trans_200"
                                                            style="background:#fa983a"><a href="{{route('allBlog.show',$blog->id)}}">التفاصيل</a></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 order-lg-3 order-1">
                                <div class="event_image">
                                    @if($blog->image())
                                    <img src="{{$blog->image()}}" alt="">
                                    @else
                                    <img src="images/event_1.jpg" alt="https://unsplash.com/@theunsteady5">
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
            <div class="section_title text-center">
                <h1> </h1>
            </div>
            @endforeach



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
<link rel="stylesheet" type="text/css" href="{{('course/styles/elements_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{('course/styles/elements_responsive.css')}}">
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


    .effect {
        cursor: pointer;
        position: relative;
        padding: 10px 20px;
        background: white;
        font-size: 28px;
        border-top-right-radius: 10px;
        border-bottom-left-radius: 10px;
        transition: all 1s;

        &:after,
        &:before {
            content: " ";
            width: 10px;
            height: 10px;
            position: absolute;
            border: 0px solid #fff;
            transition: all 1s;
        }

        &:after {
            top: -1px;
            left: -1px;
            border-top: 5px solid black;
            border-left: 5px solid black;
        }

        &:before {
            bottom: -1px;
            right: -1px;
            border-bottom: 5px solid black;
            border-right: 5px solid black;
        }

        &:hover {
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;

            // background:rgba(0,0,0,.5);
            // color:white;
            &:before,
            &:after {

                width: 100%;
                height: 100%;
                // border-color:white;
            }
        }
    }

    .data-container {
        background: #ffebee;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
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