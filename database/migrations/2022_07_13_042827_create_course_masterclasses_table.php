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

            $table->index('masterclass_category_id');
            $table->index('masterclass_level_id');
            $table->index('masterclass_type_id');
            $table->index('masterclass_price_id');
            $table->foreign('masterclass_category_id')->references('category_id')->on('course_categories');
            $table->foreign('masterclass_level_id')->references('masterclass_level_id')->on('course_masterclass_levels');
            $table->foreign('masterclass_type_id')->references('class_type_id')->on('course_class_types');
            $table->foreign('masterclass_price_id')->references('price_type_id')->on('course_price_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_masterclasses', function(Blueprint $table) {
            $table->dropForeign(['masterclass_level_id_foreign', 'masterclass_category_id_foreign', 'masterclass_type_id_foreign', 'masterclass_price_id_foreign']);
            $table->dropColumn('masterclass_level_id', 'masterclass_category_id', 'masterclass_type_id', 'masterclass_price_id');
            $table->dropIndex(['masterclass_level_id_index', 'masterclass_category_id_index', 'masterclass_type_id_index', 'masterclass_price_id_index']);
        });
    }
};
