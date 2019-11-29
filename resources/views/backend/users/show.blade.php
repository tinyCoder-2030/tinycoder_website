@extends('backend.layouts.app')


@section('content')

<div class="container float-center"
    style="background-color: #ffffff;margin-left: 0px;padding-left:20px;padding-right:20px;">
    <div class="row mb-5" style="margin-bottom:10px;">
        <div class="col-12 ">


            <h2 style="display:inline">show Admin</h2>


            <a style="display:inline;float:center;margin-left:50%" class="btn btn-primary"
                href="{{ route('users.index') }}"> back</a>

        </div>
    </div>
    <div class="card mt-5">

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>name</th>
                            <td> {{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td> {{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td> @if(!empty($user->getRoleNames()))
                                @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                                @endforeach
                                @endif</td>
                        </tr>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection