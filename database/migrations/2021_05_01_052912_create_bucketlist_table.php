<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBucketlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bucketlist', function (Blueprint $table) {
            $table->id('bucketID');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('bucketName');
            $table->mediumText('bucketDesc');
            $table->string('bucketImage');
            $table->float('bucketPrice');
            $table->string('bucketCity');
            $table->string('bucketContact');
            $table->string('bucketEmail');
            $table->string('bucketSite');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bucketlist');
    }
}
