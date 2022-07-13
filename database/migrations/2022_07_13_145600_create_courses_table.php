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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('user_id');
            $table->date('course_join_at');
            $table->timestamps();

            $table->index('class_id');
            $table->index('user_id');
            $table->foreign('class_id')->references('class_id')->on('course_classes');
            $table->foreign('user_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function(Blueprint $table) {
            $table->dropForeign(['courses_class_id_foreign', 'courses_user_id_foreign']);
            $table->dropColumn('class_id', 'user_id');
            $table->dropIndex(['courses_class_id_index', 'courses_user_id_index']);
        });
    }
};
