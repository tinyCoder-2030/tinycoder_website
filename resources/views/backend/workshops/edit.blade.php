@extends('backend.layouts.app')
@section('title','workshop'.' | '.'Tiny Coder')

@section('content')
<div class="container" style="background-color: #ffffff;margin-left: 0px;padding-left:20px;padding-right:20px;">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">


            <h2 style="display:inline">edit workshops</h2>


            <a style="display:inline;float:center;margin-left:50%" class="btn btn-primary"
                href="{{ route('workshops.index') }}"> show all</a>

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


    {{-- <form action="{{ route('workshops.update',$workshop->id) }}" method="POST" enctype="multipart/form-data"> --}}
        {!! Form::model($workshop, ['method' => 'PUT', 'route' => ['workshops.update',$workshop->id], 'files' => true,]) !!}
        @csrf
        @method('PUT')


        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <strong>Name:*</strong>
                    <input type="text" name="name" value="{{ $workshop->name }}" class="form-control"
                        placeholder="Name">
                </div>
            </div>
            <div class="col-6">
                <div class="form-group ">
                    <label class="control-label col-2 requiredField" for="date">
                        Date:
                        <span class="asteriskField">
                            *
                        </span>
                    </label>

                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar">
                            </i>
                        </div>
                        <input class="form-control" id="from_date" value="{{$workshop->from_date}}"name="from_date" placeholder="YYYY-MM-DD"
                            type="text" />
                    </div>

                </div>
</div>

      <div class="col-12form-group">
                    {!! Form::label('workshop_image',  'workshop image', ['class' => 'control-label']) !!}
                    {!! Form::file('workshop_image',  ['class' => 'form-control', 'accept' => 'image/jpeg,image/gif,image/png']) !!}
              @if( $workshop->image())
              <img height="400px" src="{{$workshop->image()}}">
              @endif

                </div>
                  <div class="col-12  form-group">
                    {!! Form::label('price',  'price', ['class' => 'control-label']) !!}
                    {!! Form::number('price', old('price'), ['class' => 'form-control']) !!}
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <strong>Detail:</strong>
                        <textarea class="form-control" style="height:150px" name="detail"
                            placeholder="Detail">{!! $workshop->detail !!}</textarea>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>


    {!! Form::close() !!}


</div>
@endsection
@section('script')


<!-- Include Date Range Picker -->
<script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var date_input = $('input[name="from_date"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'yyyy-mm-dd',

            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>

@endsection