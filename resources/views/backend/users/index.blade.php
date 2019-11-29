



@extends('backend.layouts.app')


@section('content')
<div class="container" style="background-color: #ffffff;margin-left: 0px;padding-right:60px;">
    <section class="content">
      <div class="row">
        <div class="col-12">
        @if ($message = Session::get('success'))
<div class="alert alert-success">
  <p>{{ $message }}</p>
</div>
@endif
          <div class="card">
            <div class="card-header "style="margin-bottom:20px;">
             
              <h3 class="card-title" style="display:inline;">Users Management </h3>
               <a style="display:inline;left:25%px;" href="{{ route('users.create') }}"
                       class="btn btn-success float-right">create new user </a>
        
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        
            
                                <th>num</th>
                                <th>name</th>
               
                                <th> email</th>
  
                            <th>&nbsp; action</th>
                   
                    </tr>
                </thead>
                <tbody>
                
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
</section>
</div>

@endsection
@section('script')




    <script>

        $(document).ready(function () {
            var route = '{{route('users.get_data')}}';
            $('#example1').DataTable({
            
                processing: true,
                serverSide: true,
                iDisplayLength: 10,
                retrieve: true,
                dom: 'lfBrtip<"actions">',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [ 1, 2, 3, 4 ]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 1, 2, 3, 4 ]
                        }
                    },
                    
                ],
                ajax: route,
                columns: [

                    {data: "DT_RowIndex", name: 'DT_RowIndex'},
                    {data: "name", name: 'name'},
                    {data: "email", name: 'email'},
                    {data: "actions", name: "actions"}
                ],

                createdRow: function (row, data, dataIndex) {
                    $(row).attr('data-entry-id', data.id);
                },
                language:{
                 
                    buttons :{
                        colvis : '{{trans("datatable.colvis")}}',
                        pdf : '{{trans("datatable.pdf")}}',
                        csv : '{{trans("datatable.csv")}}',
                    }
                }
            });
        });

    </script>

@endsection

