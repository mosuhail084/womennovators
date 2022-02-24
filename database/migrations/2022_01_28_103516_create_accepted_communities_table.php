<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcceptedCommunitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accepted_communities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('followers');
            $table->string('city');
            $table->string('country');
            $table->string('industry');
            $table->string('led_by');
            $table->string('led_by_id');
            $table->string('logo');
            $table->string('page_url');
            $table->integer('status');
            $table->integer('user_id');
            $table->string('created_by');
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
        Schema::dropIfExists('accepted_communities');
    }
}
