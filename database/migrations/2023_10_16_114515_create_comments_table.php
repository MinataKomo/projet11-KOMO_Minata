<?php

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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // $table->mediumText('content');
            $table->string('name');
            $table->string('last');
            $table->string("profession");
            $table->string("contact");

            $table->timestamps();

            // $table->unsignedBigInteger('etudiant_id');
            // $table->foreign('etudiant_id')->references('id')->on('etudiants');

            $table->foreignId('etudiant_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
