<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCopyPeriodicPublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_periodic_publications', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('number');
			$table->integer('volume');
			$table->date('publication_date');
			$table->integer('periodic_publication_id')->unsigned();;
			$table->integer('loanables_id')->unsigned();;
			
			$table->foreing('periodic_publication_id')->references('id')->on('periodic_publication');
			$table->foreing('loanables_id')->references('id')->on('loanables');
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
        Schema::drop('copy_periodic_publications');
    }
}
