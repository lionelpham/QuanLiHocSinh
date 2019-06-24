<?php

namespace App\Http\Controllers;

use App\grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function addGrade()
    {
        return view('Grade.addGrade')->with([
            'url' => 'add-grade'
        ]);
    }
    public function newGrade(Request $req){
        $newGrade = new grade;
        $newGrade->name_grade = $req->name_grade;
        $newGrade->maximun_class=$req->amount_class;

        $newGradeO = grade::where('name_grade','=',$req->name_grade)->get();

        if(count($newGradeO)>0){
            return redirect('list-grade')->with(
            'danger_message','Khối này đã tồn tại.'
            );
        }
        $newGrade->save();
        return redirect('list-grade')->with(
            'success_message',
            "Cập nhật thành công"
        );
    }
    public function updateGrade(Request $req,$id){
        $newGrade = grade::find($id);
        $newGrade->name_grade = $req->name_grade;
        $newGrade->maximun_class=$req->amount_class;
        $newGrade->save();
        return redirect('list-grade')->with(
            'success_message',
            "Cập nhật thành công"
        );;
    }
    public function listGrade()
    {
        $allGrade = grade::all();
        return view('Grade.listGrade')->with([
            'url' => 'list-grade',
            'listGrade'=>$allGrade
        ]);
    }
    public function deleteGrade($id){
        $grade = grade::find($id);
        $grade->delete();
        return redirect('list-grade')->with(
            'success_message',
            "Xóa thành công"
        );
    }
    public function editGrade($id){
        $grade = grade::find($id);

        return view('Grade.editGrade')->with([
            'url' => 'edit-grade',
            'grade'=>$grade
        ]);
    }
}
