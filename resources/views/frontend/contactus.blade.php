@section('title','تواصل معنا'.' | '.'Tiny Coders')
@extends('frontend.layouts.app')

@section('content')
<div class="slider-item overlay" style="background-image: url({{asset('style/images/contact-us.jpg')}});">
    <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
            <div class="col-lg-12 text-center col-sm-12">
                <div class="card-body login" style="opacity:0.9;margin-top:50px;">
                    @if(session()->has('alert'))
                    <div class="alert alert-dismissable alert-success fade show">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        {{session('alert')}}
                    </div>
                    @endif
                    <form method="POST" action="{{ route('contact-us.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-1 col-form-label text-md-right">الاسم*</label>

                            <div class="col-md-11">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" @auth value="{{ auth()->user()->name }}" @endauth @guest
                                    value="{{ old('name') }}" @endguest required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-1 col-form-label text-md-right">الإيميل*</label>

                            <div class="col-md-11">
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
                            <label for="number" class="col-md-1 col-form-label text-md-right">رقم الهاتف</label>

                            <div class="col-md-11">
                                <input id="number" type="number"
                                    class="form-control @error('number') is-invalid @enderror" name="number" @auth
                                    value="{{ auth()->user()->phone }}" @endauth @guest value="{{ old('number') }}"
                                    @endguest autofocus>

                                @error('number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="message" class="col-md-1 col-form-label text-md-right">الرسالة*</label>

                            <div class="col-md-11">

                                <textarea id="message" type="textarea"
                                    class="md-textarea form-control @error('message') is-invalid @enderror"
                                    name="message" value="{{ old('message') }}" autofocus rows="7"></textarea>
                                @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    ارسال الرسالة
                                </button>


                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @endsection
