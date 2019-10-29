{{-- @extends('backend.layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Products</h2>
            </div>
            <div class="pull-right">
                @can('workshop-create')
                <a class="btn btn-success" href="{{ route('workshops.create') }}"> Create New Product</a>
                @endcan
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
	    @foreach ($workshops as $workshop)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $workshop->name }}</td>
	        <td>{{ $workshop->detail }}</td>
	        <td>
                <form action="{{ route('workshops.destroy',$workshop->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('workshops.show',$workshop->id) }}">Show</a>
                    @can('workshop-edit')
                    <a class="btn btn-primary" href="{{ route('workshops.edit',$workshop->id) }}">Edit</a>
                    @endcan


                    @csrf
                    @method('DELETE')
                    @can('workshop-delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endcan
                </form>
	        </td>
	    </tr>
	    @endforeach
    </table>


    {!! $workshops->links() !!}


<p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>
@endsection --}}

{{-- @section('title','workshops'.' | '.'Tiny coder') --}}
@extends('backend.layouts.app')
@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="page-title float-left mb-0">إضافة</h3>
            @can('course_create')
                <div class="float-right">
                    {{-- <a href="{{ route('admin.courses.create',['length'=>$videoLenght->length]) }}"
                       class="btn btn-success">@lang('strings.backend.general.app_add_new')</a> --}}

                </div>
            @endcan
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-block">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            {{-- <a href="{{ route('admin.courses.index') }}"
                               style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">{{trans('labels.general.all')}}</a> --}}
                        </li>
                        |
                        <li class="list-inline-item">
                            {{-- <a href="{{ route('admin.courses.index') }}?show_deleted=1"
                               style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">{{trans('labels.general.trash')}}</a> --}}
                        </li>
                    </ul>
                </div>


                <table id="myTable" class="table table-bordered table-striped ">
                    <thead>
                    <tr>
                        
            
                                <th>num</th>
                                <th>name</th>
               
                                <th>from date</th>

                        <th>to date</th>
                        {{-- <th>@lang('labels.backend.courses.fields.category')</th>
                        <th>@lang('labels.backend.courses.fields.price') <br><small></small></th>
                            <th>@lang('labels.backend.courses.fields.status')</th>
                            <th>@lang('labels.backend.lessons.title')</th>
                            <th>&nbsp; @lang('strings.backend.general.actions')</th> --}}
  
                            <th>&nbsp; action</th>
                   
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

@section('script')
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script>

        $(document).ready(function () {
            var route = '{{route('workshops.get_data')}}';
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
                            columns: [ 1, 2, 3, 4,5 ]
                        }
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: [ 1, 2, 3, 4,5 ]
                        }
                    },
                    'colvis'
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
                   url : "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/tinycoder.json",
                    buttons :{
                        colvis : '{{trans("datatable.colvis")}}',
                        pdf : '{{trans("datatable.pdf")}}',
                        csv : '{{trans("datatable.csv")}}',
                    }
                }
            });
        });

    </script>

@stop