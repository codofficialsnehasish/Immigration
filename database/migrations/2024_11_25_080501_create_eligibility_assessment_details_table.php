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
        Schema::create('eligibility_assessment_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('eligibility_assessment_id');
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();

            $table->foreign('eligibility_assessment_id')->references('id')->on('eligibility_assessments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eligibility_assessment_details');
    }
};
