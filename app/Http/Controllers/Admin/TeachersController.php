<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\SaveUserRequest;
use App\User;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function getIndex() {
        return view('admin.teacher.list', [
            'user' => User::where('type', '=', 'teacher')->get(),
        ]);
    }

    public function postIndex(SaveUserRequest $request) {
        $teacher = User::create([
            'username' => $request ->input('username'),
            'password' => $request ->input('password'),
            'first_name' => $request ->input('first_name'),
            'last_name' => $request ->input('last_name'),
            'type'=>'teacher',
        ]);

        if($teacher->id) {
            return redirect()->back()->with('message', [
                'type'=> 'success',
                'message' => 'Успешно създаден нов учител!'

            ]);
        }

        return redirect()->back()->with('message', [
            'type'=> 'danger',
            'message' => 'Учителят не е създаден!'
        ]);
    }

    public function getDelete($id) {
        $isDeleted = User::where('id', $id)
            ->delete();

        if($isDeleted) {
            $message = [
                'type' => 'success',
                'message' => 'Успешно изтрит учител!'
            ];
        } else {
            $message = [
                'type' => 'danger',
                'message' => 'Учителят не е изтрит!'
            ];

        }

        return redirect()->back()->with('message', $message);
    }


    public function getEdit($id){
        $teacher = User::find($id);

        if(!$teacher){
            return redirect('admin/teacher')->with('message',[
                'type' => 'danger',
                'message' => 'Грешка!'
            ]);
        }

        return view('admin.teacher.save',[
            'teacher' => $teacher
        ]);
    }

    public function postEdit(SaveUserRequest $request, $id){
        $isUpdated = User::findOrFail($id)
            ->update([
                'first_name' => $request ->input('first_name'),
                'last_name' => $request ->input('last_name'),
            ]);

        if($isUpdated) {
            return redirect('admin/teacher')->with('message',[
                'type'=>'success',
                'message' => 'Успешно редактиран учител!'
            ]);
        }
        return redirect('admin/teacher')->with('message',[
            'type'=>'danger',
            'message' => 'Неуспешно редактиране на учител!'
        ]);
    }
}
