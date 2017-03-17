<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartyRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('party__roles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('party_id');
            $table->integer('role_type_id');
            $table->date('from_date');
            $table->date('thru_date');
            $table->decimal('credit_limit', 10,2);
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
        Schema::drop('party__roles');
    }
}
