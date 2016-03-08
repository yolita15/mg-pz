<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\SaveUserRequest;
use App\User;
use App\Clas;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function getIndex() {
        $user = User::where('type', 'student')->first();

        return view('admin.students.list', [
            'students' => User::where('type', 'student')->get(),
            'classes' => Clas::lists('name', 'id')
        ]);
    }

    public function postIndex(SaveUserRequest $request) {
        $student = User::create([
            'username' => $request ->input('username'),
            'password' => $request ->input('password'),
            'first_name' => $request ->input('first_name'),
            'last_name' => $request ->input('last_name'),
            'class_id'=> $request->get('class_id'),
            'type'=>'student',
        ]);

        if($student->id) {
            return redirect()->back()->with('message', [
                'type'=> 'success',
                'message' => 'Успешно създаден нов ученик!'

            ]);
        }
//cool, so why are you looping with for each?
        return redirect()->back()->with('message', [
            'type'=> 'danger',
            'message' => 'Ученикът не е създаден!'
        ]);
    }

    public function getDelete($id) {
        $isDeleted = User::where('id', $id)
            ->delete();

        if($isDeleted) {
            $message = [
                'type' => 'success',
                'message' => 'Успешно изтрит съществуващ ученик!'
            ];
        } else {
            $message = [
                'type' => 'danger',
                'message' => 'Ученикът не е изтрит!'
            ];

        }

        return redirect()->back()->with('message', $message);
    }

    public function getEdit($id){
        $student = User::find($id);

        if(!$student){
            return redirect('admin/class')->with('message',[
                'type' => 'danger',
                'message' => 'Грешка!'
            ]);
        }

        return view('admin.students.save',[
            'classes' => Clas::lists('name', 'id'),
            'student' => $student
        ]);
    }

    public function postEdit(SaveUserRequest $request, $id){
        $isUpdated = User::findOrFail($id)
            ->update([
                'first_name' => $request ->input('first_name'),
                'last_name' => $request ->input('last_name'),
                'class_id'=> $request->get('class_id'),
            ]);

        if($isUpdated) {
            return redirect('admin/student')->with('message',[
                'type'=>'success',
                'message' => 'Успешно редактиран ученик!'
            ]);
        }
        return redirect('admin/student')->with('message',[
            'type'=>'danger',
            'message' => 'Неуспешно редактиране на ученик!'
        ]);
    }
}
