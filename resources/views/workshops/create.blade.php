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
                    <strong>time:</strong>
                    <input placeholder="Selected time" name="from_time" type="text" id="input_starttime"
                        class="form-control timepicker">
                    <label for="input_starttime">Twelve hour clock</label>
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="bootstrap-timepicker">
                <div class="form-group">
                    <label>Time from:</label>

                    <div class="input-group date" id="timepicker" name="from_time" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#timepicker" />
                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                        </div>
                    </div>
                    <!-- /.input group -->
                </div>
</div>
</div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>time:</strong>
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
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    {{-- <strong>date:</strong>
		           <input placeholder="Selected date" name="to_date"type="text" id="date-picker-example" class="form-control datepicker">
  <label for="date-picker-example">Try me...</label> --}}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">save</button>
            </div>
        </div>


    </form>


</div>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>




 <script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>

	@endsection