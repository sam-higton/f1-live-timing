<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCircuitWikiDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circuit_wiki_data', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('circuitId');
            $table->text('distance');
            $table->integer('turns');
            $table->text('lapRecord');
            $table->text('imagePath');
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
        Schema::dropIfExists('circuit_wiki_datas');
    }
}
