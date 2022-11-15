<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->id();
            $table->string("code")->unique();
            $table->date("date");
            $table->string("type");
            $table->foreignId("responsible_from_id")->constrained("responsibles");
            $table->foreignId("responsible_to_id")->constrained("responsibles");
            $table->foreignId("site_from_id")->constrained("sites");
            $table->foreignId("site_to_id")->constrained("sites");
            $table->text("observation")->nullable();
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
        Schema::dropIfExists('transfers');
    }
}
