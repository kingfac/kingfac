<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrimoinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrimoines', function (Blueprint $table) {
            $table->id();
            $table->string('lib');
            $table->unsignedInteger('qte');
            $table->string('nature');
            $table->foreignId('patri_id')->constrained('type_patrimoines');
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
        Schema::dropIfExists('patrimoines');
    }
}
