<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('i_name');
              $table->BigInteger('c_id')->unsigned();
            $table->foreign('c_id')->references('id')->on('catagories')->onDelete('cascade')->onUpdate('cascade');
              $table->BigInteger('m_id')->unsigned();
            $table->foreign('m_id')->references('id')->on('model_tables')->onDelete('cascade')->onUpdate('cascade');
            $table->string('image');
            $table->string('status');
            $table->string('date');
            $table->string('quantity');
            $table->string('price');
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
        Schema::dropIfExists('items');
    }
}
