<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historics', function (Blueprint $table) {
            $table->id('hisID');
            $table->string('hisName');
            $table->mediumText('hisDesc');
            $table->string('hisImage');
            $table->float('hisPrice');
            $table->string('hisCity');
            $table->string('hisContact');
            $table->string('hisEmail');
            $table->string('hisSite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historics');
    }
}
