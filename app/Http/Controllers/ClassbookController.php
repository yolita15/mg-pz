<?php

namespace App\Http\Controllers;

use App\User;

class ClassbookController extends Controller
{
    public function classbook ()
    {
        return view('pages/classbook');
    }

    public function getIndex() 
    {
    	$user = User::create([
            'username' => 'admin',
            'password' => 'admin',
    		'first_name' => 'Йоанна',
    		'last_name' => 'Мурджева',
    		'type' => 'admin',
    		]);

        $user = User::create([
            'username' => 'teacher',
            'password' => 'teacher',
            'first_name' => 'Красимира',
            'last_name' => 'Манчева',
            'type' => 'teacher',
            ]);

        $user = User::create([
            'username' => 'student',
            'password' => 'student',
            'first_name' => 'Любослав',
            'last_name' => 'Стойчев',
            'type' => 'student',
            ]);
    }
}



//    	$subject = Subject::create([
//    		'name' => 'Математика',
//    		]);
//
//
//    	$studentMark = StudentMark::create([
//    		'student_id' => $user->id
//            'subject_id' =>
//            'class_id' =>
//            'mark_type_id' =>
//            'mark' =>
//    		]);
//
//
//    	$student = Student::create([
//    		'class_id' =>
//    		]);
//
//
//    	$profile = Profile::create([
//    		'name' => 'Математика, Информатика, Английски език',
//    		]);
//
//    	$methodOfStudy = MethodOfStudy::create([
//    		'name' => 'ЗП',
//    		]);
//
//    	$markType = MarkType::create([
//    		'type' => 'Тест',
//    		]);
//
//    	$classSubject = ClassSubject::create([
//    		'class_id' =>
//            'subject_id' =>
//            'teacher_id' =>
//            'method_of_study_id' =>
//    		]);
//
//    	$clas = Clas::create([
//    		'profile_id' =>
//    		'name' => '12 б',
//    		]);

