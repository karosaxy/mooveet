<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTrucksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_trucks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('truck_id');
            $table->string('name');
            $table->string('phone');
            $table->string('pickup_location');
            $table->string('destination');
            $table->string('goods_type');
            $table->string('truck_size');
            $table->timestamps();

            // $table->unique(['order_trucks_id','truck_id']);

            $table ->foreign('truck_id')
                    ->references('id')
                    ->on('trucks')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_trucks');
    }
}
