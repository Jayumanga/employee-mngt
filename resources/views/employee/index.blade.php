@extends('layouts.app')

@section('content')

    <div class="container">

        @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
        @endif

        <h3 align="center" class="mt-5">Employee Management</h3>

        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">

            <div class="form-area">
                <form action="{{ url('employee/create') }}" method="HEAD">
                    @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <label>Employee First Name</label>
                            <input type="text" name="firstname" class="form-control" value="{{ old('firstname') }}" 
                            id="firstname" placeholder="Enter first name">
                            @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>

                        <div class="col-md-6">
                            <label>Employee Last Name</label>
                            <input type="text" name="lastname" class="form-control" value="{{ old('lastname') }}" 
                            id="lastname" placeholder="Enter last name">
                            @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>

                        <div class="col-md-6">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{ old('phone') }}" 
                            id="phone" placeholder="">
                            @error('phone') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>

                        <div class="col-md-6">
                            <label>Employee DOB</label>
                            <input type="date" class="form-control" name="DOB">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>

                    </div>
                </form>
            </div>
                <div class="card-body">

                    
                    <table class="table table-bordered table-striped">
                        <thread>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Phone</th>
                                <th>DOB</th>
                                <th>Action</th>
                            </tr>
                        </thread>

                        <tbody>
                            @foreach ($employ as $item)

                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->firstname}}</td>
                                    <td>{{$item->lastname}}</td>
                                    <td>{{$item->phone}}</td>
                                    <td>{{$item->DOB}}</td>
                                    <td>
                                        <a href="{{ url('employee/'.$item->id.'/edit') }}" class="btn btn-success mx-2">Edit</a>
                                        
                                        <a href="{{ url('employee/'.$item->id.'/edit') }}" class="btn btn-danger mx-1">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('css')
    <style>
        .form-area{
            padding: 20px;
            margin-top: 20px;
              background: color #ff678f;
        }

        .bi-trash-fill{
            color:blue;
            font-size: 18px;
        }

        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
    </style>
@endpush