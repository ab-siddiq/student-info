@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Update Student</div>

                    <div class="card-body">
                        <form action="{{route('students.update',[$student->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input value="{{$student->name}}" type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Class</label>
                                <input value="{{$student->class}}" type="text" name="class" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Roll</label>
                                <input value="{{$student->roll}}" type="text" name="roll" class="form-control">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
