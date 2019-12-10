@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student Result</div>

                    <div class="card-body">

                        <form action="{{route('result.store')}}" method="post">
                            @csrf
                            @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="">Subject</label>
                                <input value="" type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Marks</label>
                                <input value="" type="text" name="class" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">GPA</label>
                                <input value="" type="text" name="roll" class="form-control">
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
