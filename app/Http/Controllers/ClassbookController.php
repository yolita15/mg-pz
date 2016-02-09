<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ClassbookController extends Controller
{
    public function classbook ()
    {
        return view('pages/classbook');
    }

    public function getIndex() 
    {
    	$user = User::create([
    		'username' => 'yoanna.murdjeva',
    		'password' => 'yoannamurdjeva',
    		'first_name' => 'Йоанна',
    		'last_name' => 'Мурджева',
    		'type' => 'admin',
    		]);

        $user = User::create([
            'username' => 'krasimira.mancheva',
            'password' => 'krasimiramancheva',
            'first_name' => 'Красимира',
            'last_name' => 'Манчева',
            'type' => 'teacher',
            ]);

        $user = User::create([
            'username' => 'liuboslav.stoichev',
            'password' => 'liuboslavstoichev',
            'first_name' => 'Любослав',
            'last_name' => 'Стойчев',
            'type' => 'student',
            ]);



    	$subject = Subject::create([
    		'name' => 'Математика',
    		]);


    	$studentMark = StudentMark::create([
    		'student_id' => $user->id 
            'subject_id' => 
            'class_id' => 
            'mark_type_id' => 
            'mark' => 
    		]);


    	$student = Student::create([
    		'class_id' =>
    		]);


    	$profile = Profile::create([
    		'name' => 'Математика, Информатика, Английски език',
    		]);

    	$methodOfStudy = MethodOfStudy::create([
    		'name' => 'ЗП',
    		]);

    	$markType = MarkType::create([
    		'type' => 'Тест',
    		]);

    	$classSubject = ClassSubject::create([
    		'class_id' =>
            'subject_id' =>
            'teacher_id' =>
            'method_of_study_id' =>
    		]);

    	$clas = Clas::create([
    		'profile_id' =>
    		'name' => '12 б',
    		]);

    }
}