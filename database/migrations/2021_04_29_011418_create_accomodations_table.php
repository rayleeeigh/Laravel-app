<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccomodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accomodations', function (Blueprint $table) {
            $table->id('accID');
            $table->string('accName');
            $table->mediumText('accDesc');
            $table->string('accImage');
            $table->float('accPrice');
            $table->string('accCity');
            $table->string('accContact');
            $table->string('accEmail');
            $table->string('accSite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accomodations');
    }
}
