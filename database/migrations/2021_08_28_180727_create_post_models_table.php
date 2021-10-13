<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_models', function (Blueprint $table) {
            $table->id();
            $table->string('post_type');
            $table->string('post_title')->unique();
            $table->string('post_slug');
            $table->longText('post_content');
            $table->string('special_link');
            $table->unsignedInteger('user_role');
            $table->boolean('status')->default(true);
            $table->boolean('trash')->default(false);
            $table->unsignedInteger('views')->default('0');
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
        Schema::dropIfExists('post_models');
    }
}
