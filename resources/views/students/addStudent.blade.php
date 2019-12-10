@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Student</div>
                    <div class="container">
                        <div class="row" style="margin-bottom: -30px;">
                            <div class="col-6"><label style="font-weight: bold; font-size: 20px">New Student</label></div>
                            <div class="col-6">
                                <a href="{{route('students.index')}}">
                                    <button class="btn btn-primary float-right mt-2">Go Back</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('students.store')}}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Class</label>
                                <input type="text" name="class" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Roll</label>
                                <input type="text" name="roll" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
