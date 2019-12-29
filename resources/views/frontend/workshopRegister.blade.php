

@section('title','تفاصيل الورشة'.' | '.'Tiny Coders')
@extends('frontend.layouts.app')

@section('content')

<div class="slider-item overlay" data-stellar-background-ratio="0.5" style="background-image:  @if($workshop->image())
url({{$workshop->image()}}); @else url({{asset('style/images/courses.jpg')}});  @endif">
    <div class="container">
        <div class="row slider-text align-items-center justify-content-center text-center">
            <div class="col-lg-12 col-sm-12">
                <h1 class="mb-4" data-aos="fade-up" data-aos-delay="" style="font-family:'cocon-next-arabic';">
                    {{$workshop->name}}</h1>
                <p class="custom-breadcrumbs" data-aos="fade-up" data-aos-delay="100"><a href="{{ route('index') }}"
                        style="font-family:'cocon-next-arabic';">الصفحة الرئيسية</a> </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center"style="border-bottom:2px solid #b6432e; ">
                    <h3 style="font-family:'cocon-next-arabic';">معلومات ورشة العمل</h3>
                   
                </div>
            </div>
        </div>
        </div>
         <br>
                    <br>
          <div class="container">
        <div class="row" >
            <div class="col-2">
                <div class="section_title text-center">
                    <h4 style="font-family:'cocon-next-arabic';">التاريخ:</h4>
                </div>
            </div>
            <div class="col-6">
                <div class="section_title text-center">
                    <h4 style="font-family:'cocon-next-arabic';color:#b6432e">{{$workshop->from_date}}</h4>
                </div>
            </div>
        </div>
        </div>
         <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="section_title text-center">
                    <h4 style="font-family:'cocon-next-arabic';">السعر:</h4>
                </div>
            </div>
            <div class="col-6">
                <div class="section_title text-center">
                    <h4 style="font-family:'cocon-next-arabic';color:#b6432e">@if($workshop->price!=null){{$workshop->price}} @else مجانية @endif</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <div class="section_title text-center">
                    <h4 style="font-family:'cocon-next-arabic';">التفاصيل:</h4>
                </div>
            </div>
        </div>
        </div>
          <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center">
                   <p> {!!$workshop->detail!!} </p>
                </div>
            </div>
        </div>
        </div>
  
<div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title text-center"style="border-bottom:2px solid #b6432e; ">
                    <h3 style="font-family:'cocon-next-arabic';">التسجيل</h3>
                   
                </div>
            </div>
        </div>
        </div>
        <div class="container">
  <div class="row align-items-center">
 
  <div class="col-lg-12 text-center col-sm-12">
                <div class="card-body login" style="opacity:0.9;margin-top:50px;">
                    @if(session()->has('alert'))
                    <div class="alert alert-dismissable alert-success fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{session('alert')}}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('workshop-register.store') }}">
                        @csrf
<input type="hidden" name="workshop_id" value="{{$workshop->id}}">
                        <div class="form-group row">
                            <label for="child_name" class="col-md-3 col-form-label text-md-right">اسم الطفل*</label>

                            <div class="col-md-9">
                                <input id="child_name" type="text" class="form-control @error('child_name') is-invalid @enderror"
                                    name="child_name" value="{{ old('child_name') }}"  required autocomplete="child_name" autofocus>

                                @error('child_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="age" class="col-md-3 col-form-label text-md-right">عمر الطفل*</label>

                            <div class="col-md-9">
                                <input  type="number" class="form-control @error('age') is-invalid @enderror"
                                    name="age" value="{{ old('age') }}"  required autocomplete="age" autofocus>

                                @error('age')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">الإيميل*</label>

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" @auth value="{{ auth()->user()->email }}" @endauth @guest
                                    value="{{ old('email') }}" @endguest required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-md-3 col-form-label text-md-right">رقم الهاتف للتواصل*</label>

                            <div class="col-md-9">
                                <input id="phone" type="number"
                                    class="form-control @error('phone') is-invalid @enderror" name="phone"   @auth value="{{ auth()->user()->phone }}" @endauth @guest
                                    value="{{ old('phone') }}" @endguest autofocus  required>

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parent_name" class="col-md-3 col-form-label text-md-right">اسم ولي الامر *</label>

                            <div class="col-md-9">
                                <input id="parent_name" type="text" class="form-control @error('parent_name') is-invalid @enderror"
                                    name="parent_name" value="{{ old('parent_name') }}"  required autocomplete="parent_name" autofocus>

                                @error('parent_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="note" class="col-md-3 col-form-label text-md-right">ملاحظات اخرى</label>

                            <div class="col-md-9">

                                <textarea id="message" type="textarea"
                                    class="md-textarea form-control @error('note') is-invalid @enderror"
                                    name="note" value="{{ old('note') }}" autofocus rows="7"></textarea>
                                @error('note')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

<div class="form" style="background:black;">
	
	<form>
		<fieldset class="form__options">
			<legend class="form__question">What is your ideal match?
</legend>
			<p class="form__answer"> 
				<input type="radio" name="match" id="match_1" value="guy" checked> 
				<label for="match_1">
					<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <title>Icon Guy</title>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Guy" stroke="#FFFFFF" stroke-width="2">
            <path d="M50,89 C28.4608948,89 11,71.5391052 11,50 C11,28.702089 28.8012779,11 50,11 C71.3811739,11 89,28.8647602 89,50 C89,71.5391052 71.5391052,89 50,89 Z" id="Oval"></path>
            <path d="M34.5,59 C32.0147186,59 30,56.9852814 30,54.5 C30,53.1996039 30.5532818,51.9907899 31.5049437,51.1414086 C32.3241732,50.4102265 33.3788668,50 34.5,50 C36.9852814,50 39,52.0147186 39,54.5 C39,56.9852814 36.9852814,59 34.5,59 Z" id="eye"></path>
            <path d="M65,59 C62.790861,59 61,57.209139 61,55 C61,53.844 61.4917357,52.7696523 62.3377558,52.0145589 C63.0660084,51.3645758 64.0033341,51 65,51 C67.209139,51 69,52.790861 69,55 C69,57.209139 67.209139,59 65,59 Z" id="eye"></path>
            <path d="M13,39 C13,39 18.3404984,39.6508711 28,35 C37.6595016,30.3491289 40,26 40,26 C40,26 50.99493,36.4771587 58,38 C65.00507,39.5228413 75,42 86,36" id="Path-9"></path>
            <path d="M40.0417765,73.6204199 C43.0857241,74.4024099 46.5428621,75 50,75 C53.4660267,75 57.0521869,74.3993329 60.2588177,73.6143844" id="Path-8"></path>
        </g>
    </g>
</svg>
					Guy
				</label> 
			</p>
			
			<p class="form__answer"> 
				<input type="radio" name="match" id="match_2" value="girl"> 
				<label for="match_2">
					<svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <title>Icon Girl</title>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <g id="Girl" stroke="#FFFFFF" stroke-width="2">
            <path d="M34.5,59 C32.0147186,59 30,56.9852814 30,54.5 C30,53.1996039 30.5532818,51.9907899 31.5049437,51.1414086 C32.3241732,50.4102265 33.3788668,50 34.5,50 C36.9852814,50 39,52.0147186 39,54.5 C39,56.9852814 36.9852814,59 34.5,59 Z" id="eye"></path>
            <path d="M65,59 C62.790861,59 61,57.209139 61,55 C61,53.844 61.4917357,52.7696523 62.3377558,52.0145589 C63.0660084,51.3645758 64.0033341,51 65,51 C67.209139,51 69,52.790861 69,55 C69,57.209139 67.209139,59 65,59 Z" id="eye"></path>
            <path d="M40.0417765,73.6204199 C43.0857241,74.4024099 46.5428621,75 50,75 C53.4660267,75 57.0521869,74.3993329 60.2588177,73.6143844" id="Path-8"></path>
            <path d="M89,85.7475102 C88.8955878,85.9344664 88.7467384,86.1876581 88.5568273,86.4896509 C88.099056,87.2175897 87.5756991,87.9455147 86.9988116,88.620918 C86.4739467,89.2354147 85.9304177,89.775041 85.375305,90.2191312 C84.8658937,90.6266602 84.2662576,91.0180436 83.595144,91.3893912 C82.7730663,91.8442719 81.887807,92.2460964 81,92.5896591 L81,40 L81,38.8469903 L79.8585786,39.0100505 C79.6614656,39.0382095 79.2577272,39.0826578 78.6591173,39.1278359 C74.3930423,39.4498038 68.7942651,39.2189264 62.1788854,38.0161301 C57.0399578,37.0817796 52.3111466,34.9372575 48.0532571,31.9450012 C45.9977761,30.5005001 44.1879399,28.9525501 42.6417908,27.4063877 C42.1025143,26.8671065 41.6354717,26.3675518 41.2428426,25.9209461 C41.0110166,25.65725 40.857774,25.472798 40.7852536,25.3808257 L40.0214746,24.4121805 L39.2317787,25.3598156 C39.1671043,25.4374249 39.0389509,25.5878658 38.8531645,25.8006757 C38.5410991,26.1581324 38.1830018,26.5571551 37.7847578,26.9872586 C36.6466602,28.2164041 35.4176003,29.445464 34.1458501,30.5900392 C32.5231664,32.0504545 30.951344,33.2630032 29.4855042,34.1425071 C29.0304384,34.4155466 28.5310795,34.7026476 27.9916336,35.002074 C27.4450358,35.3054703 26.8605908,35.6196896 26.2435123,35.9426764 C24.8349714,36.6799246 23.3234177,37.4285751 21.8115464,38.1490329 C21.2821626,38.4013022 20.7906968,38.6319577 20.3498881,38.8361138 C20.0860774,38.958295 19.8982917,39.04426 19.7992478,39.0891363 L19.211955,39.3552353 L19.211955,40 L19.211955,92.7152178 C19.1364886,92.6917076 19.0597241,92.667071 18.9817486,92.6412798 C17.9021752,92.2841999 16.8226398,91.7852694 15.8208322,91.1247895 C15.4101539,90.8540341 15.0203834,90.5606598 14.6544853,90.2439252 C14.1170024,89.7786609 13.5401931,89.1607001 12.9460031,88.4291975 C12.4227493,87.7850238 11.9163214,87.0910824 11.4478335,86.3968037 C11.2837801,86.1536836 11.1364341,85.928256 11.0082743,85.7265874 C11.0054836,85.7221962 11.0027255,85.7178532 11,85.713559 C11,85.0832089 11,84.7118308 11,81.6747405 C11,77.349481 11,77.349481 11,72.1591696 C11,71.5103806 11,71.5103806 11,70.8632812 C11,64.359375 11,64.359375 11,60 C11,52.5915787 11.1864157,47.4651466 11.4954955,44.2198091 C11.6016611,43.1050696 11.7139336,42.3079355 11.8230104,41.7807306 C11.8772398,41.5186217 11.907738,41.4205921 11.8944272,41.4472136 L11.8944272,41.4472136 L11.9531333,41.3298014 L11.979547,41.2012154 C11.9897736,41.151431 12.0134457,41.0449892 12.0517573,40.8856927 C12.1171311,40.6138739 12.199539,40.2967548 12.3001685,39.9381396 C12.5895905,38.9067215 12.9661965,37.7545848 13.4393808,36.5121684 C14.7929142,32.9582632 16.645561,29.4037594 19.0699875,26.0905275 C25.9786458,16.6491245 36.058878,11 50,11 C63.9680262,11 73.8677356,15.9210538 80.4573453,24.1261723 C82.7631629,26.9972841 84.4914427,30.0758538 85.7229878,33.1528363 C86.1530722,34.2273906 86.4899505,35.2232906 86.743943,36.1140543 C86.8941528,36.6408474 86.9824164,37.0099991 87.0191959,37.1949955 C87.0506645,37.3173809 87.0767576,37.4156648 87.1148011,37.570556 C87.1802255,37.836927 87.25369,38.161866 87.3332396,38.5463556 C87.562761,39.6557092 87.7931539,41.0150273 88.0087721,42.6321637 C88.6278466,47.2752226 89,53.0436001 89,60 L89,85.7475102 Z" id="Path-9"></path>
            <path d="M19,75 C19,75 30,90 50,90 C70,90 81,75 81,75" id="Path-10"></path>
        </g>
    </g>
</svg>
					Girl
				</label> 
			</p>
			
			
    
			
		</fieldset>
		<button class="form__button" type="submit">Submit your info</button>
	</form>
</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary"style="background:black;border:1px solid black;size:18 px;">
                                   التسجيل
                                </button>


                            </div>
                        </div>
                    </form>
                </div>
</div>
</div>
            </div>      
@endsection

   @section('style')
<style>

/* Font from Google fonts */

@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900');


/* Color palette */

$background-color: #00171F;
$footer-color: #003459;
$details-color: #00A7E1;
$font-color: #FAFAFA;
$submit-color: #00703f;
$submit-color-darker: #00824A;


/* Basic styles */

html, body {
	height: 100%;
	font-family: 'Source Sans Pro', sans-serif;
	background-color: $background-color;
	color: $font-color;
}

/* Form Styles */

.form {
	max-width: 610px;
	margin: 60px auto;
}

.form__header {
	margin-bottom: 40px;
	border-bottom: 1px dashed rgba($font-color,.15);
}

.form__title {
	font-size: 45px;
	margin: 10px 0;
}

.form__instruction {
	font-size: 22px;
}

.form__options {
	border: none;
	padding: 0;
}

.form__question {
	font-size: 25px;
}

.form__answer {
	display: inline-block;
	box-sizing: border-box;
	width: 23%;
	margin: 20px 1% 20px 0;
	height: 180px;
	vertical-align: top;
	font-size: 22px;
	text-align: center; 
}

label {
	border: 1px solid rgba($font-color,.15);
	box-sizing: border-box;
	display: block;
	height: 100%;
	width: 100%;
	padding: 10px 10px 30px 10px;
	cursor: pointer;
	opacity: .5;
	transition: all .5s ease-in-out;
	&:hover, &:focus, &:active {
		border: 1px solid rgba($font-color,.5);
	}
}

.form__button {
	height: 40px;
	border: none;
	background-color: $submit-color;
	color: $font-color;
	text-transform: uppercase;
	font-family: 'Source Sans Pro', sans-serif;
	padding: 0 20px;
	border-radius: 20px;
	font-weight: 900;
	cursor: pointer;
	margin: 40px 0;
	transition: all .25s ease-in-out;
	&:hover, &:focus {
		background-color: $submit-color-darker;
		text-shadow: 1px 1px 1px rgba(0,0,0,.25);
		outline: none;
	}
}


/* Input style */

input[type="radio"] {
	opacity: 0;
	width: 0;
  height: 0;
}

input[type="radio"]:active ~ label {
  opacity: 1;
}

input[type="radio"]:checked ~ label {
  opacity: 1;
	border: 1px solid $font-color;
}


/* Footer Styles */

footer {
	background-color: $footer-color;
	position: relative;
	padding: 20px;
	h2, h3, p, ul {
		max-width: 610px;
		margin: 20px auto;
	}
}

.footer__title {
	font-size: 30px;
	margin-top: 40px;
	color: $background-color;
}

.footer__subtitle {
	font-size: 22px;
}

.footer__parragraph {
	line-height: 1.5em;
	font-size: 22px;
	a {
		color: $details-color;
	}
}

.footer__list {
	@extend .footer__parragraph;
}

.copyright {
	@extend .footer__parragraph;
	text-align: center;
	border-top: 1px dashed rgba($font-color,.15);
	padding: 10px 0;
	margin: 40px auto;
}


</style>
<link rel="stylesheet" type="text/css" href="//www.fontstatic.com/f=cocon-next-arabic" />
   @endsection
   @section('script')
<script>
 
 </script> 

   @endsection