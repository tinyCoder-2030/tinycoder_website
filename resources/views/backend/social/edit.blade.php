@extends('backend.layouts.app')
@section('title','Social Network'.' | '.'Tiny Coder')

@section('content')

<div class="container float-center"
    style="background-color: #ffffff;margin-left: 0px;padding-left:20px;padding-right:20px;">

    <div class="row">
        <div class="col-12">


            <h2 style="display:inline">edit social newtwork account</h2>


            <a style="display:inline;float:center;margin-left:50%" class="btn btn-primary"
                href="{{ route('social.index') }}"> show all</a>

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

   {!! Form::model($socialNetwork, ['method' => 'PUT', 'route' => ['social.update', $socialNetwork->id], 'files' => true,]) !!}

    <div class="card">
        <div class="card-header">
    
        </div>
        <div class="card-body">
            <div class="row">
           
                <div class="col-12 form-group">
                    {!! Form::label('link','link' , ['class' => 'control-label']) !!}
                    {!! Form::text('link', old('link'), ['class' => 'form-control ']) !!}

                </div>
                
               </div>
                <div class="col-12 form-group">
                    {!! Form::label('status', 'status', ['class' => 'control-label']) !!}
                    {!! Form::checkbox('status', old('status'), ['class' => 'form-control ']) !!}

                </div>
                     <div class="checkbox d-inline mr-4">
                        {!! Form::hidden('status', 0) !!}
                        {!! Form::checkbox('status', 1, old('status'), []) !!}
                        {!! Form::label('status', 'status', ['class' => 'checkbox control-label font-weight-bold']) !!}
                    </div>
            </div>
        </div>
    </div>


    <div class="col-12 text-center">
        {!! Form::submit('submit', ['class' => 'btn btn-danger mb-4 form-group']) !!}
    </div>

    {!! Form::close() !!}
</div>
@endsection
