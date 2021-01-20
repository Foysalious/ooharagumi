<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('constructions', function (Blueprint $table) {
            $table->incremets('id');
            $table->string('status');
            $table->string('category');
            $table->string('city');
            $table->string('facility');
            $table->string('construction')->nullable();
            $table->string('image');
            $table->string('place')->nullable();
            
            $table->string('complete')->nullable();
            $table->string('size')->nullable();
            $table->string('explanation')->nullable();
            $table->string('image1')->nullable();
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
        Schema::dropIfExists('constructions');
    }
}
