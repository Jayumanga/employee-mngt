@extends('layouts.app')

@section('content')

    <div class="container">

        <h3 align="center" class="mt-5">Employee Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form method="POST" action="{{ route('employee.index') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstname">
                        </div><div class="col-md-6">
                            <label>Middle Name</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                        <div class="col-md-6">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="middlename">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" href="{{route('employee.index') }}" class="btn btn-info" value="Register">
                        </div>

                    </div>
                </form>
            </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background-color:#FFFF89;
        }

        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush