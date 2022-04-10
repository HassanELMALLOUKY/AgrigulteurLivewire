<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interventions', function (Blueprint $table) {
            $table->date("Int_Debut")->primary();
            $table->string("Int_Emp_Nss",30);
            $table->foreign('Int_Emp_Nss')->references('Emp_Tarif')->on('employes')->onDelete('cascade');
            $table->unsignedBigInteger("Int_Par_Id");
            $table->foreign('Int_Par_Id')->references('id')->on('parcelles')->onDelete('cascade');

            $table->integer("Int_Nb_Jours");

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
        Schema::dropIfExists('interventions');
    }
}
