<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\SaveClassRequest;
use App\Http\Requests;
use App\Clas;
use App\Profile;
use App\Http\Controllers\Controller;


class ClassesController extends Controller
{
    public function getIndex() {
        return view('admin.classes.list', [
            'classes' => Clas::get(),
            'profiles' => Profile::lists('name', 'id')
        ]);
    }



    public function postIndex(SaveClassRequest $request) {
        $class = Clas::create([
            'profile_id'=> $request->get('profile_id'),
            'name' => $request ->input('class_name'),
        ]);

        if($class->id) {
            return redirect()->back()->with('message', [
                'type'=> 'success',
                'message' => 'Успешно записан нов клас!'

            ]);
        }

        return redirect()->back()->with('message', [
            'type'=> 'danger',
            'message' => 'Класът не е записан!'
        ]);
    }

    public function getDelete($id) {
        $isDeleted = Clas::where('id', $id)
            ->delete();

        if($isDeleted) {
            $message = [
                'type' => 'success',
                'message' => 'Успешно изтрит съществуващ профил!'
            ];
        } else {
            $message = [
                'type' => 'danger',
                'message' => 'Профилът не е изтрит'
            ];

        }

        return redirect()->back()->with('message', $message);
    }

    public function getEdit($id){
        $class = Clas::find($id);

        if(!$class){
            return redirect('admin/class')->with('message',[
                'type' => 'danger',
                'message' => 'Грешка!'
            ]);
        }

        return view('admin.classes.save',[
            'profiles' => Profile::lists('name', 'id'),
            'class' => $class
        ]);
    }

    public function postEdit(SaveClassRequest $request, $id){
        $isUpdated = Clas::findOrFail($id)
            ->update([
                'name' => $request->input('class_name'),
                'profile_id'=> $request->get('profile_id'),
            ]);

        if($isUpdated) {
            return redirect('admin/class')->with('message',[
                'type'=>'success',
                'message' => 'Успешно редактиран профил!'
            ]);
        }
        return redirect('admin/class')->with('message',[
            'type'=>'danger',
            'message' => 'Неуспешно редактиране на профил!'
        ]);
    }
}
