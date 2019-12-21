@extends('backend.layouts.app')
@section('title','Contact us'.' | '.'Tiny Coder')

@section('content')

<div class="container float-center"
    style="background-color: #ffffff;margin-left: 0px;padding-left:20px;padding-right:20px;">
    <div class="row mb-5" style="margin-bottom:10px;">
        <div class="col-12 ">


            <h2 style="display:inline">show Contact us</h2>


            <a style="display:inline;float:center;margin-left:50%" class="btn btn-primary"
                href="{{ route('contact.index') }}"> back</a>

        </div>
    </div>
    <div class="card mt-5">

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped " style="text-align: center; vertical-align: middle;">
                        <tr>
                            <th>name</th>
                            <td> {{ $contact->name }}</td>
                        </tr>
                           <tr>
                            <th>email</th>
                            <td> {{ $contact->email }}</td>
                        </tr>
                          <tr>
                            <th>phone</th>
                            <td> {{ $contact->number }}</td>
                        </tr>  
                        <tr>
                            <th>date</th>
                            <td> {{ $contact->created_at->year }}\ {{ $contact->created_at->month }} \{{ $contact->created_at->day }}</td>
                        </tr>
                          <tr>
                            <th>time</th>
                            <td> {{ $contact->created_at->hour }}:{{ $contact->created_at->minute }}</td>
                        </tr>
                          <tr>
                            <th>message</th>
                            <td> {{ $contact->message }}</td>
                        </tr>

                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection