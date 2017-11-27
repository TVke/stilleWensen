<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAudiotracksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audiotracks', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('wisher_id');
            $table->timestamps();

	        $table->foreign('wisher_id')
		        ->references('id')->on('wishers')
		        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::table('audiotracks', function (Blueprint $table) {
		    $table->dropForeign(['wisher_id']);
	    });
        Schema::dropIfExists('audiotracks');
    }
}
