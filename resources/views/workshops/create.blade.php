@extends('backend.layouts.app')


@section('content')
<div class="container float-center" style="background-color: #ffffff;margin-left: 0px;padding-right:10px;">

    <div class="row">
        <div class="col-12">


            <h2 style="display:inline">Add New workshops</h2>


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


    <form action="{{ route('workshops.store') }}" method="POST">
        @csrf


        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Detail:</strong>

                    <textarea class="form-control" name="detail" id="description-textarea" rows="8"
                        placeholder="Detail"></textarea>
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



<script type="text/javascript">

</script>

@endsection