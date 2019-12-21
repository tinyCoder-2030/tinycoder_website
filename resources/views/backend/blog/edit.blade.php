@extends('backend.layouts.app')
@section('title','Blog'.' | '.'Tiny Coder')

@section('content')

<div class="container float-center"
    style="background-color: #ffffff;margin-left: 0px;padding-left:20px;padding-right:20px;">

    <div class="row">
        <div class="col-12">


            <h2 style="display:inline">edit blog</h2>


            <a style="display:inline;float:center;margin-left:50%" class="btn btn-primary"
                href="{{ route('blog.index') }}"> show all</a>

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

   {!! Form::model($blog, ['method' => 'PUT', 'route' => ['blog.update', $blog->id], 'files' => true,]) !!}

    <div class="card">
        <div class="card-header">
    
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 form-group">
                    {!! Form::label('title','title', ['class' => 'control-label']) !!}
                    {!! Form::text('title', old('title'), ['class' => 'form-control ' ]) !!}

                </div>
        
                 <div class="col-12 form-group">
                    {!! Form::label('image', 'image*', ['class' => 'control-label']) !!}
                    {!! Form::file('image',  ['class' => 'form-control', 'accept' => 'image/jpeg,image/gif,image/png']) !!}
                @if( $blog->image())
              <img width="500px" src="{{$blog->image()}}">
              @endif
               </div>
                   <div class="col-12 form-group">
                    {!! Form::label('abstract', 'abstract*', ['class' => 'control-label']) !!}
                    {!! Form::text('abstract', old('abstract'), ['class' => 'form-control ']) !!}

                </div>
                <div class="col-12 form-group">
                    {!! Form::label('content', 'content*', ['class' => 'control-label']) !!}
                    {!! Form::textarea('content', old('content'), ['class' => 'form-control ']) !!}

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
