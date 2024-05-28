<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourrierEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courrier_employes', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->date('daterecu');
            $table->text('analyse');
            $table->string('code');
            $table->string('type_courrier');
            $table->string('service');
            $table->unsignedBigInteger('id_entrant');
            $table->unsignedBigInteger('id_employe');
            $table->foreign('id_entrant')->references('id')->on('entrants')->onDelete('cascade');
            $table->foreign('id_employe')->references('id')->on('employes')->onDelete('cascade');
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
        Schema::dropIfExists('courrier_employes');
    }
}
