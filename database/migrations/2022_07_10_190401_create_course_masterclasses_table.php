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
        Schema::create('course_masterclasses', function (Blueprint $table) {
            $table->id('masterclass_id');
            $table->unsignedBigInteger('masterclass_category_id');
            $table->string('masterclass_name');
            $table->string('masterclass_short_desc');
            $table->unsignedBigInteger('masterclass_level_id');
            $table->unsignedBigInteger('masterclass_type_id');
            $table->unsignedBigInteger('masterclass_price_id');
            $table->string('masterclass_thumbnail');
            $table->string('masterclass_video_preview');
            $table->string('masterclass_price')->nullable();
            $table->string('masterclass_discount')->nullable();
            $table->string('masterclass_total_duration');
            $table->string('masterclass_total_curriculumn');
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
        Schema::dropIfExists('course_masterclasses');
    }
};
