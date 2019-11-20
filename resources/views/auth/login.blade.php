
@section('title','تسجيل الدخول'.' | '.'Tiny Coders')
@extends('frontend.layouts.app')

@section('content')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/hero.png')}});">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
         <div class="card-body login">
                     <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">الإيميل</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">كلمة المرور</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12 ">
                             <label> <a class="" style="font-size:15px;text-decoration:underline;" href="{{ route('register') }}">
                                      ليس لدي حساب؟
                                    </a>
                                    </label>
                            </div>
                        </div>
                        {{-- <div class="form-group row">
                            <div class="col-md-12 ">
                                <div class="form-check">
                                    <input class="form-check-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember"style="padding-right:20px;">
                                       ذكرني
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                  تسجيل الدخول
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="" href="{{ route('password.request') }}">
                                        هل نسيت كلمة المرور؟
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
    
      </div>
    </div>
  </div>

@endsection
