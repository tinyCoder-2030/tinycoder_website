@extends('backend.layouts.app')
@section('title','aboutus'.' | '.'Tiny Coder')

@section('content')
<div class="container" style="background-color: #ffffff;margin-left: 0px;padding-left:20px;padding-right:20px;">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">



        </div>
    </div>



    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@if(Session::has('success'))
<p class="alert alert-success">{{ Session::get('success') }}</p>
@endif

    {{-- <form action="{{ route('workshops.update',$workshop->id) }}" method="POST" enctype="multipart/form-data"> --}}
        {!! Form::model( $aboutus,['method' => 'PUT', 'route' => ['aboutus.update',$aboutus->id], 'files' => true,]) !!}
        @csrf
        @method('PUT')

    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left mb-0">about us</h3>
           
        </div>
        <div class="card-body">
  
                 

            <div class="row">
                <div class="col-12 form-group">
                    {!! Form::label('vision', 'vision', ['class' => 'control-label']) !!}
                    {!! Form::textarea('vision', old('vision'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                </div>
            </div>
       <div class="row">
                <div class="col-12 form-group">
                    {!! Form::label('message', 'message', ['class' => 'control-label']) !!}
                    {!! Form::textarea('message', old('message'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                </div>
            </div>

                   <div class="row">
                <div class="col-12 form-group">
                    {!! Form::label('goal', 'goal', ['class' => 'control-label']) !!}
                    {!! Form::textarea('goal', old('goal'), ['class' => 'form-control editor', 'placeholder' => '']) !!}
                </div>
            </div>
            <div class="row">


                <div class="col-md-12 text-center form-group">
                    <button type="submit" class="btn btn-info waves-effect waves-light ">
                        save
                    </button>
            
                </div>

            </div>
            
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
