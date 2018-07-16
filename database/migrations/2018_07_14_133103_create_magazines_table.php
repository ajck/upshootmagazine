<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMagazinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magazines', function (Blueprint $table) {
            $table->increments('id');
			$table->string('name', 40)->nullable(); // Name
			$table->float('price', 4,2)->nullable(); // Price
			$table->string('cover', 40)->nullable(); // Cover
			$table->string('colour', 30)->nullable(); // Colour
			$table->string('size', 10)->nullable(); // Size
			$table->string('theme', 100)->nullable(); // Theme

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
        Schema::dropIfExists('magazines');
    }
}
