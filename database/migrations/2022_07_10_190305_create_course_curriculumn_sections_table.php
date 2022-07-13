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
        Schema::create('course_curriculumn_sections', function (Blueprint $table) {
            $table->id('curriculumn_section_id');
            $table->unsignedBigInteger('masterclass_id');
            $table->string('curriculumn_section_name');
            $table->boolean('section_is_completed');
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
        Schema::dropIfExists('course_curriculumn_sections');
    }
};
