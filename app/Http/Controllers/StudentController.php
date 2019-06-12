<?php

namespace App\Http\Controllers;

use App\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function addStudent()
    {
        return view('Student.addStudent')->with([
            'url' => 'add-student'
        ]);
    }
    public function newStudent(Request $request){
        $student = new student;
        $student->nameStudent = $request->nameStudent;
        $student->sexual = $request->optionsRadios;
        $student->date_of_birth = $request->dob;
        $student->address = $request->address;
        $student->maLop = 0;
        $student->save();
        return redirect('add-student')->with(
            'success_message',
            "Cập nhật thành công"

        );
    }
    public function listStudent()
    {
        $listStudent = student::all();

        return view('Student.listStudent')->with([
            'url' => 'list-student',
            'listStudent'=> $listStudent
        ]);
    }
    public function editStudent($id)
    {
        $student = student::find($id);
        return view('Student.editStudent')->with([
            'url' => 'list-student',
            'student'=>$student
        ]);
    }
    public function updateStudent($id,Request $request){
        $student = student::find($id);
        $student->nameStudent = $request->nameStudent;
        $student->sexual = $request->optionsRadios;
        $student->date_of_birth = $request->dob;
        $student->address = $request->address;
        $student->save();
        return redirect('list-student')->with(
            'success_message',
            "Cập nhật thành công"

        );
    }
    public function deleteStudent($id){
        $student = student::find($id);
        $student->delete();
        return redirect('list-student')->with(
            'success_message',
            "Xóa thành công"

        );
    }

}
