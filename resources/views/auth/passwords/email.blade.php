

@section('title','إستعادة كلمة المرور'.' | '.'Tiny Coders')
@extends('frontend.layouts.app')

@section('content')
<div class="slider-item overlay" data-stellar-background-ratio="0.5"
    style="background-image: url({{asset('style/images/hero.png')}});">
    <div class="container">
      <div class="row slider-text align-items-center justify-content-center">
        <div class="col-lg-12 text-center col-sm-12">
         <div class="card-body login">
  
                       @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">عنوان البريد الالكتروني</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    إرسال رابط إستعادة كلمة المرور
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    
      </div>
    </div>
  </div>

@endsection

