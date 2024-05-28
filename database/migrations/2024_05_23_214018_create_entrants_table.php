<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrants', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->date('date_recu'); 
            $table->text('analyse')->nullable();
            $table->string('nom_entreprise');
            $table->string('code');
            $table->string('service_concerne');
            $table->string('type_de_courrier');
            $table->integer('active')->default(0);
            $table->unsignedBigInteger('id_notification');
            $table->foreign('id_notification')->references('id')->on('notifications')->onDelete('cascade');
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
        Schema::dropIfExists('entrants');
    }
}
