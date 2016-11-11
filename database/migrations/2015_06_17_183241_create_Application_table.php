<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id');
            $table->integer('status');
            $table->string('first_name', 40);
            $table->string('last_name', 60);
            $table->string('email');
            $table->integer('phone');
            $table->string('address');
            $table->string('city', 60);
            $table->integer('postcode');
            $table->string('country', 100);
            $table->text('reason');
            $table->text('custom_fields');
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
        Schema::drop('Application');
    }
}
