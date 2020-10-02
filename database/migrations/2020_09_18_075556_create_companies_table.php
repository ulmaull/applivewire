<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('name_website');
            $table->string('description_id');
            $table->string('description_en');
            $table->string('vision');
            $table->string('mission');
            $table->string('address');
            $table->string('code_pos');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('email');
            $table->string('phone_number');
            $table->string('Whatsapp');
            $table->string('icon');
            $table->string('logo');
            $table->string('white_logo');
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
        Schema::dropIfExists('companies');
    }
}
