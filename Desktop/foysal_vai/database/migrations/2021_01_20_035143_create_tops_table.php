<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('logo')->nullable();
            $table->longText('description')->nullable();
            $table->string('creation_date')->nullable();
            $table->string('author_id')->nullable();
            $table->string('update_date')->nullable();
            $table->string('changer')->nullable();
       
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
        Schema::dropIfExists('tops');
    }
}
