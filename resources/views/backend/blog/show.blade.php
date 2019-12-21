@extends('backend.layouts.app')
@section('title','blog'.' | '.'Tiny Coder')

@section('content')

<div class="container float-center"
    style="background-color: #ffffff;margin-left: 0px;padding-left:20px;padding-right:20px;">
    <div class="row mb-5" style="margin-bottom:10px;">
        <div class="col-12 ">


            <h2 style="display:inline">show photo gllery</h2>


            <a style="display:inline;float:center;margin-left:50%" class="btn btn-primary"
                href="{{ route('blog.index') }}"> back</a>

        </div>
    </div>
    <div class="card mt-5">

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped " style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>title</th>
                            <td> {{ $blog->title }}</td>
                        </tr>
                          <tr>
                            <th>abstract</th>
                            <td dir="rtl" >{!! $blog->abstract !!} </td>
                        </tr>
                        <tr>
                            <th>content</th>
                            <td dir="rtl" >{!! $blog->content !!} </td>
                        </tr>
                           <tr>
                            <th>image</th>
                            <td> @if( $blog->image())
              <img width="400px"height="400px"src="{{$blog->image()}}">
              @endif </td>
                        </tr>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection