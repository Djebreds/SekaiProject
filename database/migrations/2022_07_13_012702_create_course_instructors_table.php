<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_instructors', function (Blueprint $table) {
            $table->id('instructor_id');
            $table->unsignedBigInteger('role_id');
            $table->string('instructor_first_name');
            $table->string('instructor_last_name');
            $table->string('instructor_email')->unique();
            $table->string('instructor_password');
            $table->enum('instructor_status', ['active', 'deactive']);
            $table->string('instructor_picture');
            $table->string('instructor_phone');
            $table->text('instructor_about');
            $table->string('instructor_job_title')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_facebook')->nullable();
            $table->string('social_likedin')->nullable();
            $table->string('social_youtube')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_instructors');
    }
};
