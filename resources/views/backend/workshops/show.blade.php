@extends('layouts.app')
@section('title','workshop'.' | '.'Tiny Coder')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show workshop</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('workshops.index') }}"> Back</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $workshop->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $workshop->detail }}
            </div>
        </div>
    </div>
@endsection
<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>