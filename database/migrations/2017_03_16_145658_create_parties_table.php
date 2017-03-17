<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('party_type_id')->unsigned()->index();
            $table->string('organization_name')->nullable();
            $table->string('current_last_name')->nullable();
            $table->string('current_first_name')->nullable();
            $table->string('current_middle_name')->nullable();
            $table->string('mothers_maiden_name')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('current_personal_title')->nullable();
            $table->string('current_suffix')->nullable();
            $table->char('current_nickname',1)->nullable();
            $table->string('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->decimal('height',5,2)->nullable();
            $table->decimal('weight',5,2)->nullable();
            $table->decimal('social_security_number',10,0)->nullable();
            $table->text('comments')->nullable();
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
        Schema::drop('parties');
    }
}
