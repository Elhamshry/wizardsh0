<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *$table->string('first_name');
    $table->date('dob');

    $table->string('sex');
    $table->integer('total_stars');
    $table->integer('month_stars');
    $table->string('country');
    $table->string('city');
    $table->string('last_name');
    $table->string('address_detailed');
    $table->string('resume');
    $table->string('cv1');
    $table->string('cv2');
    $table->string('cv3');
    $table->string('cv4');
    $table->boolean('student');
    $table->boolean('staff');
    $table->boolean('employee');
    $table->boolean('trainer');
    $table->integer('phone1');
    $table->integer('phone2');
    $table->text('brief');
    $table->string('image_url');
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
