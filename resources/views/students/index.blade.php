@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><u><h3>Index Page for Student Module:</h3></u></div>

                    <div class="card-body">
                        <label style="font-size: 25px"><strong>All Student Information</strong></label>
                        <a href="{{route('students.addStudent')}}">
                            <button class="btn btn-primary float-right mb-2">Add Student</button>
                        </a>
                        <table class="table table-bordered text-center">
                            <thead>
                            <th>SL</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Roll</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->class}}</td>
                                    <td>{{$student->roll}}</td>
                                    <td>
                                        <a href="{{route('students.edit',[$student->id])}}">
                                            <button class="btn btn-success">Edit</button>
                                        </a>
                                        <a href="{{route('students.destroy',[$student->id])}}">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                        <a href="{{route('results.result',[$student->id])}}">
                                            <button class="btn btn-primary">Add Result</button>
                                        </a>
                                        <a href="{{route('results.viewResult',[$student->id])}}">
                                            <button class="btn btn-secondary">View Result</button>
                                        </a>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                        <div class="pagination justify-content-center">
                            {{$students->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
