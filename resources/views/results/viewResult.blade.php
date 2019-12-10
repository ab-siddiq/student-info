@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; font-weight: bold">View Result:</div>

                    <div class="card-body">
                        <label style="font-size: 25px"><strong>All Student Information</strong></label>
                        <a href="{{route('students.index')}}">
                            <button class="btn btn-primary float-right mb-2">Go Back</button>
                        </a>
                        <div class="container">
                            <div class="row" style="font-size: 20px">
                                <div class="col-5">
                                    <p for=""><strong>Name: </strong></p>
                                </div>
                                <div class="col-2">
                                    <label><strong>Class: </strong></label>
                                </div>
                                <div class="col-2">
                                    <label for=""><strong>Roll: </strong></label>
                                </div>
                                <div class="col-3">
                                    <label for=""><strong>CGPA: </strong></label>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered text-center">
                            <thead style="font-size: 20px">
                            <th>SL</th>
                            <th>Subject</th>
                            <th>Marks</th>
                            <th>GPA</th>
                            </thead>
                            <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$result->subject}}</td>
                                    <td>{{$result->marks}}</td>
                                    <td>{{$result->gpa}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
