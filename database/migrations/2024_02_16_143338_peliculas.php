<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('peliculas', function(Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('year');
    $table->string('director');
    $table->string('poster');
    $table->boolean('rented');
    $table->text('synopsis');
    $table->date('created_at');
    $table->date('updated_at');

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
