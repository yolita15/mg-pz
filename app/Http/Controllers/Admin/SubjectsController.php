<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\SaveSubjectRequest;
use App\Http\Requests;
use App\Subject;
use App\Http\Controllers\Controller;

class SubjectsController extends Controller
{
    public function getIndex() {
        return view('admin.subjects.list', [
            'subjects' => Subject::get()
        ]);
    }

    public function postIndex(SaveSubjectRequest $request) {
        $subject = Subject::create([
            'name' => $request ->input('subject-name'),
        ]);

        if($subject->id) {
            return redirect()->back()->with('message', [
                'type'=> 'success',
                'message' => 'Успешно записан нов предмет!'

            ]);
        }

        return redirect()->back()->with('message', [
            'type'=> 'danger',
            'message' => 'Предметът не е записан!'
        ]);
    }

    public function getDelete($id) {
        $isDeleted = Subject::where('id', $id)
            ->delete();

        if($isDeleted) {
            $message = [
                'type' => 'success',
                'message' => 'Успешно изтрит съществуващ предмет!'
            ];
        } else {
            $message = [
                'type' => 'danger',
                'message' => 'Предметът не е изтрит!'
            ];

        }

        return redirect()->back()->with('message', $message);
    }

    public function getEdit($id){
        $subject = Subject::find($id);

        if(!$subject){
            return redirect('admin/subjects')->with('message',[
                'type' => 'danger',
                'message' => 'Грешка!'
            ]);
        }

        return view('admin.subjects.save',[
            'subject' => $subject
        ]);
    }

    public function postEdit(SaveSubjectRequest $request, $id){
        $isUpdated = Subject::findOrFail($id)
            ->update([
                'name' => $request->input('subject-name')
            ]);

        if($isUpdated) {
            return redirect('admin/subjects')->with('message',[
                'type'=>'success',
                'message' => 'Успешно редактиран предмет!'
            ]);
        }
        return redirect('admin/subjects')->with('message',[
            'type'=>'danger',
            'message' => 'Неуспешно редактиране на предмета!'
        ]);
    }
}
