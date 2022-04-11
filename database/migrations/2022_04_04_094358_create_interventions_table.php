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
            $table->date("Int_Debut");
            $table->string("Int_Emp_Nss",30);
            $table->foreign('Int_Emp_Nss')->references('Emp_Nss')->on('employes')->onDelete('cascade');
            $table->unsignedBigInteger("Int_Par_Id");
            $table->foreign('Int_Par_Id')->references('id')->on('parcelles')->onDelete('cascade');
            $table->primary(array("Int_Debut","Int_Emp_Nss","Int_Par_Id"));
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
