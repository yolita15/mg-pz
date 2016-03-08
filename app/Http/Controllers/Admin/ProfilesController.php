<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\SaveProfileRequest;
use App\Profile;
use App\Http\Controllers\Controller;

class ProfilesController extends Controller
{
    public function getView() {
        return view('admin.profiles.list');
    }
    public function getIndex() {
    	return view('admin.profiles.list', [
            'profiles' => Profile::get()
        ]);
    }

    public function postIndex(SaveProfileRequest $request) {
    	$profile = Profile::create([
    		'name' => $request->input('name')
    		]);

        if($profile->id) {
            return redirect()->back()->with('message', [
                'type'=> 'success',
                'message' => 'Успешно записан нов профил!'

            ]);
        }

        return redirect()->back()->with('message', [
            'type'=> 'danger',
            'message' => 'Профилът не е записан!'
        ]);
    }

    public function getDelete($id) {
        $isDeleted = Profile::where('id', $id)
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
        $profile = Profile::find($id);

        if(!$profile){
            return redirect('admin/profile')->with('message',[
                'type' => 'danger',
                'message' => 'Грешка!'
            ]);
        }

        return view('admin.profiles.save',[
            'profile' => $profile
        ]);
    }

    public function postEdit(SaveProfileRequest $request, $id){
        $isUpdated = Profile::findOrFail($id)
            ->update([
                'name' => $request->input('name')
            ]);

        if($isUpdated) {
            return redirect('admin/profile')->with('message',[
                'type'=>'success',
                'message' => 'Успешно редактиран профил!'
            ]);
        }
        return redirect('admin/profile')->with('message',[
            'type'=>'danger',
            'message' => 'Неуспешно редактиране на профил!'
        ]);
    }
}
