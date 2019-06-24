<?php

namespace App\Http\Controllers;

use App\object;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function addSubject()
    {
        return view('Subject.addSubject')->with([
            'url' => 'add-subject'
        ]);
    }
    public function editSubject($id){
        $subj = object::find($id);
        return view('Subject.editSubject')->with([
            'url' => 'edit-subject',
            'subject'=>$subj
        ]);
    }
    public function updateSubject(Request $req,$id){
        $sub =object::find($id);
        $sub->score_passed = $req->min_score;
        $sub->save();
        return redirect('list-subject')->with(
        'success_message','Cập nhật thành công'
        );
    }
    public function newSubject(Request $req){
        $subjectNew = new object;
        $subjectNew->nameObject = $req->name_object;
        $subjectNew->score_passed = $req->min_score;

        $subjectList = object::where('nameObject','=',$req->name_object)->get();

        if(count($subjectList)>0){
            return redirect('list-subject')->with(
            'danger_message','Môn học đã tồn tại.'
            );
        }
        $subjectNew->save();
        return redirect('list-subject')->with(
        'success_message','Thêm môn học thành công'
        );
    }
    public function listSubject()
    {
        $subjectList = object::all();

        return view('Subject.listSubject')->with([
            'url' => 'list-subject',
            'subjectList'=>$subjectList
        ]);
    }
    public function deleteSubject($id){
        $subj = object::find($id);
        $subj->delete();
        return redirect('list-subject')->with(
            'success_message',
            "Xóa thành công"
        );
    }
}
