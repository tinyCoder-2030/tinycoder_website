@extends('adminlte::page')
@section('title', 'Countries | Lara Admin Yajra')
@section('content_header')
    <h1>Countries</h1>
@stop
@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
          @endif     
        </div>
        <div class="box-body">
          <table id="laravel_datatable" class="table table-bordered table-striped">
            <thead>
              <tr>
             
                                <th>Sr.No</th>
                                <th>name</th>

                     
                       
                        <th>email</th>
              
                            <th>action</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
@stop
@section('js')
<script>
  $(document).ready( function () {
    $('#laravel_datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{route('users.get_data')}}",
      columns: [
         {data: "DT_RowIndex", name: 'DT_RowIndex'},
                    {data: "name", name: 'name'},

                       {data: "email", name: 'email'},
          
                    {data: "actions", name: "actions"}
      ]
    });
  });
</script>
@stop
