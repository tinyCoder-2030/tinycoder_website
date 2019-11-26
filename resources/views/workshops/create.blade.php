@extends('backend.layouts.app')


@section('content')
<div class="container" style="background-color: #ffffff;margin-left: 0px;padding-right:60px;">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
	
 
                <h2 style="display:inline">Add New workshops</h2>
       
		
                <a style="display:inline;float:center;margin-left:50%" class="btn btn-primary" href="{{ route('workshops.index') }}"> show all</a>
            
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


    <form action="{{ route('workshops.store') }}" method="POST">
        @csrf


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>start time:</strong>
                    <input placeholder="Selected time" name="from_time" type="text" id="input_starttime"
                        class="form-control timepicker">
                    <label for="input_starttime">Twelve hour clock</label>
                </div>
            </div>
			
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>end time:</strong>
                        <input placeholder="Selected time" name="to_time" type="text" id="input_starttime"
                            class="form-control timepicker">
                        <label for="input_starttime">Twelve hour clock</label>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>date:</strong>
                        <input placeholder="Selected date" name="from_date" type="text" id="date-picker-example"
                            class="form-control datepicker">
                        <label for="date-picker-example">Try me...</label>
                    </div>
                </div>
                   <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    {!! Form::label('full_text', trans('labels.backend.lessons.fields.full_text'), ['class' => 'control-label']) !!}
                    {!! Form::textarea('full_text', old('full_text'), ['class' => 'form-control editor', 'placeholder' => '']) !!}

                </div>
            </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <div class='input-group date' id='datetimepicker1' data-target-input="nearest">
                             <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                            <span class="input-group-addon"  data-target="#datetimepicker1" data-toggle="datetimepicker">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    {{-- <strong>date:</strong>
		           <input placeholder="Selected date" name="to_date"type="text" id="date-picker-example" class="form-control datepicker">
  <label for="date-picker-example">Try me...</label> --}}
                </div>
           {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/>
                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
        </div> --}}
            <div class="md-form">
  <input placeholder="Selected time" type="text" id="input_starttime" class="form-control timepicker">
  <label for="input_starttime">Dark theme</label>
</div>

 {{-- <div id="datetimepicker" class="input-append date">
      <input type="text"></input>
      <span class="add-on">
        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
      </span>
    </div> --}}
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </div>


    </form>


</div>
@endsection
@section('script')
    {{-- <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> --}}

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>


 <script type="text/javascript">
 $(document).ready(function() {
     $('#datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'pt-BR'
      });
      $('#input_starttime').datetimepicker({
// Light or Dark theme
   format: 'hh:mm:ss',
        language: 'pt-BR'
});
new FroalaEditor('textarea#full_text')
 $(function () {
                $('#datetimepicker1').datetimepicker();
            });
     
   });
        </script>

	@endsection