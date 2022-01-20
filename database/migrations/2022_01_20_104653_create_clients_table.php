<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            // ID
            // name(string)
            // surname(string)
            // username(string)
            // company_id(bigInt)
            // image_url(string)

            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('username');
            
            //$table->bigInteger('company_id');

            $table->unsignedBigInteger('company_id');
            $table->string('image_url', 300);

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
        Schema::dropIfExists('clients');
    }
}
