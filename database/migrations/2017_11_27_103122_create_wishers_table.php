<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWishersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wishers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_name');
            $table->string('sender_email');
            $table->string('quiet_slug');
            $table->string('recipient_name');
	        $table->string('recipient_email');
            $table->string('full_sound_slug');
            $table->string('soundless_video')->nullable()->default(null);
	        $table->string('sound_video')->nullable()->default(null);
            $table->boolean('allow_public')->default(0);
            $table->timestamp('sound_available');
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
        Schema::dropIfExists('wishers');
    }
}
