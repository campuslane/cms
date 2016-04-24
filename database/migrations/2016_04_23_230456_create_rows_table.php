<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rows', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id');
            $table->string('class')->nullable();
            $table->string('style')->nullable();
            $table->integer('sort')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index('page_id');
            $table->index('sort');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rows');
    }
}
