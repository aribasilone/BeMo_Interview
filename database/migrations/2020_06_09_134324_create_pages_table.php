<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('page_name');
            $table->boolean('indexable')->nullable();
            $table->string('image_name')->nullable();
            $table->string('meta_title')->nullable();
            $table->mediumText('meta_descr')->nullable();
            $table->text('fb_pixel')->nullable();
            $table->text('google')->nullable();
            $table->string('contact_email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
