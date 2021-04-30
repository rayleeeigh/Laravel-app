<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id('foodID');
            $table->string('foodName');
            $table->mediumText('foodDesc');
            $table->string('foodImage');
            $table->float('foodPrice');
            $table->string('foodCity');
            $table->string('foodContact');
            $table->string('foodEmail');
            $table->string('foodSite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
