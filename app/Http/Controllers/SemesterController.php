<?php

namespace App\Http\Controllers;

use App\semester;
use Illuminate\Http\Request;

class SemesterController extends Controller
{
    public function addSemester()
    {
        return view('Semester.addSemester')->with([
            'url' => 'add-semester'
        ]);
    }
    public function editSemester($id)
    {
        $semester = semester::find($id);

        return view('Semester.editSemester')->with([
            'url' => 'edit-semester',
            'semester'=>$semester
        ]);
    }
    public function deleteSemester($id){
        $listSemester = semester::find($id);
        $listSemester->delete();
        return redirect('list-semester')->with(
            'success_message',
            "Xóa thành công"
        );

    }
    public function newSemester(Request $req){
        $newSemester = new semester;
        $newSemester->name = $req->name_semester;
        $newSemester->year_from = $req->date_from;
        $newSemester->year_to = $req->date_to;
        $newSemester->save();

        return redirect('list-semester')->with(
            'success_message',
            "Cập nhật thành công"
        );
    }
    public function updateSemester(Request $req,$id){
        $newSemester = semester::find($id);
        $newSemester->name = $req->name_semester;
        $newSemester->year_from = $req->date_from;
        $newSemester->year_to = $req->date_to;
        $newSemester->save();

        return redirect('list-semester')->with(
            'success_message',
            "Cập nhật thành công"
        );
    }
    public function listSemester()
    {
        $listSemester = semester::all();
        return view('Semester.listSemester')->with([
            'url' => 'list-semester',
            'listSemester' =>$listSemester
        ]);
    }
}
