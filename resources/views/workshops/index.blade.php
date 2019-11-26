


@extends('backend.layouts.app')


@section('content')
<div class="container" style="background-color: #ffffff;margin-left: 0px;padding-right:60px;">
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header "style="margin-bottom:20px;">
             
              <h3 class="card-title" style="display:inline;">workshops </h3>
               <a style="display:inline;left:25%px;" href="{{ route('workshops.create') }}"
                       class="btn btn-success float-right">create</a>
        
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        
            
                                <th>num</th>
                                <th>name</th>
               
                                <th>from date</th>

                        <th>to date</th>
  
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
            var route = '{{route('workshops.get_data')}}';
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
                            columns: [ 1, 2, 3, 4,5 ]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 1, 2, 3, 4,5 ]
                        }
                    },
                    
                ],
                ajax: route,
                columns: [

                    {data: "DT_RowIndex", name: 'DT_RowIndex'},
                    {data: "name", name: 'name'},
                    {data: "from_date", name: 'from_date'},
                    {data: "to_date", name: 'to_date'},
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

