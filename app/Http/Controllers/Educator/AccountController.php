<?php

namespace App\Http\Controllers\Educator;

use App\Clas;
use App\ClassSubject;
use App\StudentMark;
use Illuminate\Http\Request;

use App\Http\Requests\SaveMarkRequest;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\User;
use App\MarkType;
use App\Subject;
use Illuminate\Queue\RedisQueue;


class AccountController extends Controller
{

    public function getView()
    {
        return view('educator.account.loggedin', [
            'user' => Auth::user()
        ]);
    }


    public function getIndex()
    {

        $user = Auth::user();

        $class_ids = ClassSubject::where('teacher_id', $user->id)->get();
        $subject_ids = ClassSubject::where('teacher_id', $user->id)->get();

        return view('educator.account.account', [
            'user' => $user,
            'class' => $this->iNeedToComeUpWithAName($class_ids, 1),
            'subject' => $this->iNeedToComeUpWithAName($subject_ids, 2),
        ]);
    }

    private function iNeedToComeUpWithAName($rows, $type)
    {
        $data = [];

        foreach ($rows as $row) {
            if ($type == 1) {
                $class = Clas::findOrFail($row->class_id);
                $data[$row->class_id] = $class->name;
            } else {
                $subject = Subject::findOrFail($row->subject_id);
                $data[$row->subject_id] = $subject->name;
            }
        }

        return $data;
    }

    public function postIndex(Request $request)
    {
        ClassSubject::where([
            ['subject_id', $request->input('subject')],
            ['class_id', $request->input('class')]
        ])->get();


        $user = Auth::user();

        return view('educator.account.input', [
            'user' => $user,
            'studentss' => User::where('class_id', '=', $request->get('class'))
                ->orderBy('first_name', 'asc')->get()->lists('full_name', 'id'),
            'markType' => MarkType::get()->lists('type', 'id'),
            'sub' => Subject::where('id', '=', $request->input('subject'))->get()->lists('name', 'id'),


        ]);

    }

//wait.stop :D

    public function markStudent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mark' => 'numeric|required|min:2|max:6',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }

        StudentMark::create([
            'student_id' => $request->input('userStu'),
            'subject_id' => $request->input('stuSub'),
            'mark_type_id' => $request->input('markType'),
            'mark' => $request->input('mark')]);

        $user = Auth::user();
        $subject = ClassSubject::where('teacher_id', $user->id)->get()->pluck('subject_id', 'id');


        return view('educator.account.marks', [
            'user' => Auth::user(),
            'marks' => StudentMark::whereIn('subject_id',$subject)->get(),
        ]);

    }

    public function addedMark()
    {
        $user = Auth::user();
        $subject = ClassSubject::where('teacher_id', $user->id)->pluck('subject_id','id');

        return view('educator.account.marks', [
            'user' => $user,
            'marks' => StudentMark::whereIn('subject_id', $subject)->get()
        ]);
    }

    public function edit($id = 0)
    {
        $mark = StudentMark::find($id);
        $user = Auth::user();
        $type = MarkType::lists('type', 'id');

        return view('educator/account/save', compact('mark', 'user', 'type'));
    }

    public function saveEdit(SaveMarkRequest $request, $id)
    {
        StudentMark::findOrFail($id)
            ->update([
                'mark_type_id' => $request->input('type'),
                'mark' => $request->input('mark'),
            ]);


        $user = Auth::user();

        return view('educator.account.marks', [
            'user' => $user,
            'marks' => StudentMark::get()
        ])->with('message', [
            'type' => 'success',
            'message' => 'Успешна редакция!'
        ]);
    }

}
