@extends('backend.layouts.app')
@section('title','photo Gallery'.' | '.'Tiny Coder')

@section('content')

<div class="container float-center"
    style="background-color: #ffffff;margin-left: 0px;padding-left:20px;padding-right:20px;">
    <div class="row mb-5" style="margin-bottom:10px;">
        <div class="col-12 ">


            <h2 style="display:inline">show photo gllery</h2>


            <a style="display:inline;float:center;margin-left:50%" class="btn btn-primary"
                href="{{ route('photoGallery.index') }}"> back</a>

        </div>
    </div>
    <div class="card mt-5">

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped " style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>title</th>
                            <td> {{ $photoGallery->title }}</td>
                        </tr>
                       
                        <tr>
                            <th>description</th>
                            <td dir="rtl" >{!! $photoGallery->description !!} </td>
                        </tr>
                           <tr>
                            <th>image</th>
                            <td> @if( $photoGallery->image())
              <img width="400px"height="400px"src="{{$photoGallery->image()}}">
              @endif </td>
                        </tr>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection