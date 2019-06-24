<?php

namespace App\Http\Controllers;

use App\classrom;
use App\grade;
use App\teacher;
use App\student;
use App\object;
use App\semester;
use Illuminate\Http\Request;
use App\scoreBoard;
class ClassromController extends Controller
{
    public function addClass()
    {
        $grade = grade::all();
        $semester = semester::all();
        $teacher = teacher::all();
        return view('Class.addClass')->with([
            'url' => 'add-class',
            'grade' => $grade,
            'semester' => $semester,
            'teacher'=>$teacher
        ]);
    }
    public function newClass(Request $req){
        $classrom = new classrom;
        $classrom->name_class = $req->name_class;
        $classrom->size_of_class=$req->maxSize_class;
        $classrom->maKhoi = $req->ma_grade;
        $classrom->maGV = $req->ma_GVCN;
        $classrom->maHK = $req->ma_semester;

        $classrom->save();
        return redirect('list-class')->with(
            'success_message','Tạo lớp thành công'
        );

    }
    public function listClass()
    {
        $classrom = classrom::all();
        // $student = student::all()->where('maLop',$classrom->id);
        return view('Class.listClass')->with([
            'url' => 'list-class',
            'classrom'=>$classrom,
            // 'sumStudent'=>$student
        ]);
    }
    public function updateClass($id, Request $req){
        // print_r($req->get('all__student'));
        $arrStudent = $req->listStudent;
        if(count($arrStudent)>0){
                foreach ($arrStudent as $stu) {
                $student = student::find($stu);
                $student->maLop = $id;
                $student->save();
            }
        }
        $arrSubject = $req->listSubject;
        if(count($arrSubject)>0){


            foreach ($arrSubject as $subject) {

                $listStu  = student::where('maLop',$id)->get();
                foreach ($listStu as $stud) {
                    $scoreBoard = new scoreBoard;
                    $scoreBoard->maHS = $stud->id;
                    $scoreBoard->maLop = $id;
                    $scoreBoard->maMonHoc = $subject;
                    $scoreBoard->score=0;
                    $scoreBoard->save();
                }

            }
        }
        // dd($req->all());
        return redirect('list-class')->with(
            'success_message','Update thành công'
        );
        // $test = implode(',', $test);


    }
    public function editClass($id)
    {
        $classrom = classrom::find($id);
        $studentOfClass = student::where('maLop',$classrom->id)->get();
        $grade = grade::find($classrom->maKhoi);
        $semester = semester::find($classrom->maHK);
        $teacher = teacher::find($classrom->maGV);

        $allStudent = student::where('maLop','=',NULL)->get();

        $board = scoreBoard::select('maMonHoc')->where('maLop','=',$id)->distinct()->get()->toArray();


        $allSubject = object::whereNotIn('id',$board)->get();

        return view('Class.editClass')->with([
            'url' => 'edit-class',
            'classrom' => $classrom,
            'grade' => $grade,
            'semester'=>$semester,
            'teacher'=>$teacher,
            'student'=>$allStudent,
            'subject'=>$allSubject,
            'studentOfClass'=>$studentOfClass
        ]);
    }
    public function viewClass($id)
    {
        $classrom = classrom::find($id);
        $subject = scoreBoard::select('maMonHoc')->distinct()->where('maLop','=',$id)->get()->toArray();

        $listSubjectOfClass = object::whereIn('id',$subject)->get();
        // dd($listSubjectOfClass);
        // return;
        $student = student::where('maLop','=',$id)->get();
        return view('Class.viewClass')->with([
            'url' => 'view-class',
            'listStudent' =>$student,
            'classrom' => $classrom,
            'listSubject'=>$listSubjectOfClass
        ]);
    }
    public function scoreboardClass($idClass,$idSubject)
    {
        $classrom = classrom::find($idClass);
        $subject = object::find($idSubject);
        $boardScore = scoreBoard::where([['maLop','=',$idClass],['maMonHoc','=',$idSubject]])->get();

        return view('Class.scoreboardClass')->with([
            'url' => 'view-class',
            'classrom' => $classrom,
            'subject' => $subject,
            'scoreBoard'=>$boardScore
        ]);
    }
    public function scoreboardClassInput($idClass,$idSubject)
    {
        $classrom = classrom::find($idClass);
        $subject = object::find($idSubject);
        $boardScore = scoreBoard::where([['maLop','=',$idClass],['maMonHoc','=',$idSubject]])->get();

        return view('Class.scoreboardClassInput')->with([
            'url' => 'view-class',
            'classrom' => $classrom,
            'subject' => $subject,
            'scoreBoard'=>$boardScore
        ]);
    }
    public function updateScore(Request $req,$idClass,$idSubject){
        $data = $req->except('_token','DataTables_Table_0_length');
            foreach ($data as $key => $part) {
                $board = scoreBoard::find($key);
                $board->score = $part;
                $board->save();
            }
        // $url =
        return redirect()->back()->with('success_message', 'Cập nhật điểm thành công');
    }
}
