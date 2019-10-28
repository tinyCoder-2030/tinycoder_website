@extends('backend.layouts.app')


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
@endsection