<?php

use App\Models\Szavak;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('szavaks', function (Blueprint $table) {
            $table->id();
            $table->string('angol');
            $table->string('magyar');
            $table->foreignId('temaId')->references('id')->on('temas');
            $table->timestamps();
        });
       /*   Szavak::create(['angol'=>'book','magyar'=>'könyv','temanev'=>'angol']);
        Szavak::create(['angol'=>'table','magyar'=>'tábla','temanev'=>'angol']);
        Szavak::create(['angol'=>'product','magyar'=>'termék','temanev'=>'angol']); 
 */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('szavaks');
    }
};
