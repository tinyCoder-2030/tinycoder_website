@extends('backend.layouts.app')

@section('title','blog'.' | '.'Tiny Coder')
@section('content')
<div class="container" style="background-color: #ffffff;margin-left: 0px;padding-right:60px;">
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header "style="margin-bottom:20px;">
             
              <h3 class="card-title" style="display:inline;">blog </h3>
               <a style="display:inline;left:25%px;" href="{{ route('blog.create') }}"
                       class="btn btn-success float-right">create</a>
        
            </div>
            <!-- /.card-header -->
            <div class="card-body">
               
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                        
            
                        <th>num</th>
                        <th>title</th>
                    <th>content</th>
                    <th>photo</th>
                
                        <th>actions</th>
                  
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
            var route = '{{route('blog.get_data')}}';
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
                    {data: "title", name: 'name'},
                    {data: "content", name: 'content'},
                      {data: 'photo', name: 'photo',
    "render": function(data, type, row) {
        return '<img width="400px" style="height: 200px;" src="'+data+'" />';  }},
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
