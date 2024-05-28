<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id(); // colonne ID personnalisée
            $table->string('reference');
            $table->string('nom_entreprise');
            $table->integer('active')->default(0);
            $table->date('date_recu');
            $table->text('analyse');
            $table->string('code'); // un chiffre fixe pour l'entreprise
            $table->string('service_concerne');
            $table->string('type_de_courrier');
            $table->timestamps(); // colonnes created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
