<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('swepstakes', function (Blueprint $table) {
            $table->uuid(column: "id")->primary();
            $table->foreign(columns: "user_id")->constrained();
            $table->integer(column: "number_of_winners")->default(1);
            $table->dateTime(column: "end_date")->nullable();
            $table->text(column: "description")->nullable();
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
        Schema::dropIfExists('swepstakes');
    }
};
