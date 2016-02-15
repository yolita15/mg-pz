<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('password');
            $table->string('first_name', 20);
            $table->string('last_name', 20);
            $table->integer('class_id')
                ->unsigned()
                ->nullable();
            $table->enum('type', ['admin', 'teacher', 'student']);
            $table->rememberToken();
            $table->timestamps();

            });
        Schema::create('subjects', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            });
        Schema::create('profiles', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();

            });
        Schema::create('classes', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('profile_id')
                ->unsigned();
            $table->foreign('profile_id')
                ->references('id')->on('profiles');
            $table->string('name');
            $table->timestamps();

            });
        Schema::create('class_subjects', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id')
                ->unsigned();
            $table->foreign('class_id')
                ->references('id')->on('classes');
            $table->integer('subject_id')
                ->unsigned();
            $table->foreign('subject_id')
                ->references('id')->on('subjects');
            $table->integer('teacher_id')
                ->unsigned();
            $table->foreign('teacher_id')
                ->references('id')->on('users');
            $table->integer('method_of_study_id')
                ->unsigned()
                ->nullable();
            $table->timestamps();
        });

        Schema::create('mark_types', function(Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->timestamps();
        }); 

        Schema::create('student_marks', function(Blueprint $table){
            $table->increments('id');
            $table->integer('student_id')
                ->unsigned();
            $table->foreign('student_id')
                ->references('id')->on('users');
            $table->integer('subject_id')
                ->unsigned();
            $table->foreign('subject_id')
                ->references('id')->on('subjects');
            $table->integer('class_id')
                ->unsigned();
            $table->foreign('class_id')
                ->references('id')->on('classes');
            $table->integer('mark_type_id')
                ->unsigned();
            $table->foreign('mark_type_id')
                ->references('id')->on('mark_types');
            $table->integer('mark');
            $table->timestamps();


        });

        Schema::create('methods_of_study' , function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        }); 

        Schema::create('students', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id')
                ->unsigned();
            $table->foreign('class_id')
                ->references('id')->on('classes');
            $table->timestamps();

        }); 


        Schema::table('users', function(Blueprint $table) {
            $table->foreign('class_id')
                ->references('id')->on('classes');
        });

        Schema::table('class_subjects', function(Blueprint $table) {
            $table->foreign('method_of_study_id')
                ->references('id')->on('methods_of_study');

        }); 


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::drop('subjects');
        Schema::drop('profiles');
        Schema::drop('classes');
        Schema::drop('class_subjects');
        Schema::drop('mark_types');
        Schema::drop('student_marks');
        Schema::drop('methods_of_study');
        Schema::drop('students');
    }
}
