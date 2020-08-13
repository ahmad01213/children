<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('childs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('address');
            $table->string('registry');
            $table->string('nationality');
            $table->string('birth');
            $table->string('f_name');
            $table->string('f_phone');
            $table->string('f_work');
            $table->string('f_qualifications');
            $table->string('m_name');
            $table->string('m_phone');
            $table->string('m_work');
            $table->string('diseases')->default('no');
            $table->string('status')->default('no');
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
        Schema::dropIfExists('childs');
    }
}
