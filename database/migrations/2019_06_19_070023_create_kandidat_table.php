<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kandidat');
            $table->text('visi');
            $table->text('misi');
            $table->text('nip');
            $table->integer('votes')->default(0);
            $table->string('fotoprofil')->default('man1.png');
            $table->tinyInteger('dpd');
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
        Schema::dropIfExists('kandidat');
    }
}
