<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Subject;
use App\User;
use App\Clas;
use Illuminate\Http\Request;

use App\Http\Requests\SaveRulesRequest;
use App\ClassSubject;
use App\Http\Controllers\Controller;

class RuleController extends Controller
{
    public function getIndex() {

        return view('admin.rules.list', [
            'rules' => ClassSubject::get(),
            'classes'=> Clas::lists('name','id'),
            'subjects' => Subject::lists('name', 'id'),
            'users'=> User::where('type','=', 'teacher')->get()->lists('full_name','id'),
        ]);


    }

    public function postIndex(SaveRulesRequest $request) {

        $rule = ClassSubject::create([
            'class_id'=> $request->get('class_id'),
            'subject_id'=> $request->get('subject_id'),
            'teacher_id'=> $request->get('teacher_id'),
        ]);

        if($rule->id) {
            return redirect()->back()->with('message',[
                'message' => 'Успешен запис!',
                'type'=> 'success',

            ]);
        }

        return redirect()->back()->with('message',[
            'message' => 'Неуспешен запис!',
            'type'=> 'danger',

        ]);
    }

    public function getDelete($id) {
        $isDeleted = ClassSubject::where('id', $id)
            ->delete();

        if($isDeleted) {
            $message = [
                'type' => 'success',
                'message' => 'Успешно изтриване!'
            ];
        } else {
            $message = [
                'type' => 'danger',
                'message' => 'Неуспешно изтриване!'
            ];

        }

        return redirect()->back()->with('message', $message);
    }

    public function getEdit($id){
        $rule = ClassSubject::find($id);

        if(!$rule){
            return redirect('admin/rules')->with('message',[
                'type' => 'danger',
                'message' => 'Грешка!'
            ]);
        }

        return view('admin.rules.save',[
            'classes'=> Clas::lists('name', 'id'),
            'subjects' => Subject::lists('name', 'id'),
            'users'=>User::where('type','=','teacher')->get()->lists('full_name','id'),
            'rules' => $rule
        ]);
    }

    public function postEdit(SaveRulesRequest $request, $id){
        $isUpdated = ClassSubject::findOrFail($id)
            ->update([
                'class_id'=> $request->get('class_id'),
                'subject_id'=> $request->get('subject_id'),
                'teacher_id'=> $request->get('teacher_id'),
            ]);

        if($isUpdated) {
            return redirect('admin/rules')->with('message',[
                'type'=>'success',
                'message' => 'Успешно редактиране!'
            ]);
        }
        return redirect('admin/rules')->with('message',[
            'type'=>'danger',
            'message' => 'Неуспешно редактиране!'
        ]);
    }

}
