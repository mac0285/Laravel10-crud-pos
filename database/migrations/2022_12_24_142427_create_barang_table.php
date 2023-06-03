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
		Schema::create('barang', function (Blueprint $table) {
			$table->id();
			$table->string('plu')->nullable();
			$table->string('nama_barang')->nullable();
			$table->string('kategori_barang')->nullable();
			$table->integer('prices')->nullable();
			$table->integer('margin')->nullable();
			$table->integer('ppn')->nullable();
			$table->integer('qty')->nullable();
			$table->integer('tot_prices')->nullable();
			$table->string('sup1')->nullable();
			$table->string('sup2')->nullable();
			$table->string('sup3')->nullable();
			$table->string('update_by')->nullable();
			$table->integer('active')->nullable();
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
		Schema::dropIfExists('barang');
	}
};
