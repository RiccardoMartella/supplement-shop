<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplementsTable extends Migration
{
    /**
     * Esegui le migrazioni.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->default(0);
            $table->longText('cover_image')->nullable();
            $table->string('nome');
            $table->text('descrizione')->nullable();
            $table->decimal('prezzo', 8, 2);
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverti le migrazioni.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplements');
    }
}
