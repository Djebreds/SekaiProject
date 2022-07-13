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
        Schema::create('course_curriculumns', function (Blueprint $table) {
            $table->id('curriculumn_id');
            $table->unsignedBigInteger('curriculumn_section_id');
            $table->string('curriculumn_name');
            $table->string('curriculumn_description');
            $table->string('curriculumn_video');
            $table->boolean('curriculumn_is_completed');
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
        Schema::dropIfExists('course_curriculumns');
    }
};
