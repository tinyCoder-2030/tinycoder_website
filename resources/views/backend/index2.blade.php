@extends('backend.layouts.app')

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left mb-0">@lang('labels.backend.courses.title')</h3>
            @can('course_create')
                <div class="float-right">
                    <a href=""
                       class="btn btn-success">@lang('strings.backend.general.app_add_new')</a>

                </div>
            @endcan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-block">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href=""
                               style=""></a>
                        </li>
                        |
                        <li class="list-inline-item">
                            <a href=""
                               style=""></a>
                        </li>
                    </ul>
                </div>


                <table id="myTable" class="table table-bordered table-striped" >
                    <thead>
                    <tr>
                       
                                <th style="text-align:center;"><input type="checkbox" class="mass" id="select-all"/></th>


                  
                                <th>@lang('labels.general.sr_no')</th>
                                <th>@lang('labels.backend.courses.fields.teachers')</th>
                
                                <th>@lang('labels.general.sr_no')</th>
                       
                        <th>@lang('labels.backend.courses.fields.title')</th>
                        <th>@lang('labels.backend.courses.fields.category')</th>
                        <th>@lang('labels.backend.courses.fields.price') <br><small></small></th>
                            <th>@lang('labels.backend.courses.fields.status')</th>
                            <th>@lang('labels.backend.lessons.title')</th>
                
                            <th>&nbsp; @lang('strings.backend.general.actions')</th>
                 
                       
                    </tr>
                    </thead>

                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
      {{-- {{dd(Auth::user()->hasRole('teacher'))}} --}}
@stop

@push('after-scripts')
    <script>

        $(document).ready(function () {
            var route = '';


            $('#myTable').DataTable({
                processing: true,
                serverSide: true,
                iDisplayLength: 10,
                retrieve: true,
                dom: 'lfBrtip<"actions">',
                buttons: [
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: [ 1, 2, 3, 4,5,6 ]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 1, 2, 3, 4,5,6 ]
                        }
                    },
                    'colvis'
                ],
                ajax: route,
                columns: [
              
                    {data: "DT_RowIndex", name: 'DT_RowIndex'},
                    {data: "teachers", name: 'teachers'},

                       {data: "teachers", name: 'teachers'},
                    {data: "title", name: 'title'},
                    {data: "category", name: 'category'},
                    {data: "price", name: "price"},
                    {data: "status", name: "status"},
                    {data: "lessons", name: "lessons"},
                    {data: "actions", name: "actions"}
                ],
                columnDefs: [
                    {"width": "5%", "targets": 0},
                    {"className": "text-center", "targets": [0]}
                ],
           

                createdRow: function (row, data, dataIndex) {
                    $(row).attr('data-entry-id', data.id);
                },
               
            });
   
        });

    </script>

@endpush