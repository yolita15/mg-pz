<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
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
            $table->timestamps();
        });

        // @todo students; method of study; marks type; relation between student, subject and mark


        Schema::table('users', function(Blueprint $table) {
            $table->foreign('class_id')
                ->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profile_subjects');
        Schema::drop('profiles');
        Schema::drop('subjects');
        Schema::drop('users');
    }
}
