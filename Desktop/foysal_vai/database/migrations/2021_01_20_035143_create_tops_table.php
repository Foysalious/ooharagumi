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
            $table->string('unknown1')->nullable();
            $table->string('unknown2')->nullable();
            $table->string('unknown3')->nullable();
            $table->string('unknown4')->nullable();
            $table->string('info_id')->nullable();
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
