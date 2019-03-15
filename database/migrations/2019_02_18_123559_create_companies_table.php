<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 100);
            $table->string('name_full');
            $table->string('legal_addr');
            $table->string('fact_addr');
            $table->string('inn', 12);
            $table->string('ogrnip', 15);
            $table->string('okpo', 10);
            $table->string('name_bank');
            $table->string('r_schet', 20);
            $table->string('k_schet', 20);
            $table->string('bik', 9);
            $table->string('b_inn', 10);
            $table->string('kpp', 9);
            $table->string('phone', 100);
            $table->string('fax', 100);
            $table->string('work', 100);
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
