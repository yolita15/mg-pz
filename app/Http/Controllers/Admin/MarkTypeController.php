<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\SaveMarkTypeRequest;
use App\MarkType;
use App\Http\Controllers\Controller;

class MarkTypeController extends Controller
{
    public function getIndex() {
        return view('admin.marktypes.list', [
            'marktypes' => MarkType::get()
        ]);
    }

    public function postIndex(SaveMarkTypeRequest $request) {
        $marktype = MarkType::create([
            'type' => $request ->input('marktype'),
        ]);

        if($marktype->id) {
            return redirect()->back()->with('message', [
                'type'=> 'success',
                'message' => 'Успешно записан тип оценка!'

            ]);
        }

        return redirect()->back()->with('message', [
            'type'=> 'danger',
            'message' => 'Типът оценка не е записан!'
        ]);
    }

    public function getDelete($id) {
        $isDeleted = MarkType::where('id', $id)
            ->delete();

        if($isDeleted) {
            $message = [
                'type' => 'success',
                'message' => 'Успешно изтрит тип оценка!'
            ];
        } else {
            $message = [
                'type' => 'danger',
                'message' => 'Типът оценка не е изтрит!'
            ];

        }

        return redirect()->back()->with('message', $message);
    }

    public function getEdit($id){
        $marktype = MarkType::find($id);

        if(!$marktype){
            return redirect('admin/subjects')->with('message',[
                'type' => 'danger',
                'message' => 'Грешка!'
            ]);
        }

        return view('admin.marktypes.save',[
            'marktype' => $marktype
        ]);
    }

    public function postEdit(SaveMarkTypeRequest $request, $id){
        $isUpdated = MarkType::findOrFail($id)
            ->update([
                'type' => $request->input('marktype')
            ]);

        if($isUpdated) {
            return redirect('admin/marktype')->with('message',[
                'type'=>'success',
                'message' => 'Успешно редактиран тип оценка!'
            ]);
        }
        return redirect('admin/marktype')->with('message',[
            'type'=>'danger',
            'message' => 'Неуспешно редактиране на типа оценка!'
        ]);
    }
}
