<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mealtypes', function (Blueprint $table) {
            $table->id();
            $table->string('mealtype')->unique();
            $table->bigInteger('category_ID')->unsigned();
            $table->foreign('category_ID')->references('id')->on('mealcategories');
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
        Schema::dropIfExists('mealtypes');
    }
}
