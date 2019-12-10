<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::paginate(3);
        return view('students.index',compact('students'));
    }
    public function addStudent(){
        return view('students.addStudent');
    }
    public function store(Request $request){
        student::create([
            'name'=>$request->get('name'),
            'class'=>$request->get('class'),
            'roll'=>$request->get('roll'),

        ]);
        return redirect()->to('/students/information');
    }
    public function edit($id){
        $student = Student::findOrFail($id);
        return view('students.edit',compact('student'));
    }
    public function update($id){
        $student = Student::findOrFail($id);
        $student->name = request('name');
        $student->class = request('class');
        $student->roll = request('roll');
        $student->save();
        return redirect()->to('/students/information');
    }
//    public function addStudent(Request $request){
//        return redirect()->to('/students/information');
//    }

    public function destroy($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->to('/students/information');
    }
}
