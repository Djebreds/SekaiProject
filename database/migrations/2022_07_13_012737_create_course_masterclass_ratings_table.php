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
        Schema::create('course_masterclass_ratings', function (Blueprint $table) {
            $table->id('rating_id');
            $table->unsignedBigInteger('masterclass_id');
            $table->unsignedBigInteger('user_id');
            $table->integer('rating_count');
            $table->text('rating_comment');
            $table->integer('rating_status');
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
        Schema::dropIfExists('masterclass_ratings');
    }
};
