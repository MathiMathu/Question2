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
        Schema::create('cost_estimates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('building_type_id');
            $table->unsignedBigInteger('additional_feature_id')->nullable();
            $table->integer('number_of_floors');
            $table->double('total_area');
            $table->double('material_cost');
            $table->double('labor_cost');
            $table->timestamps();

            $table->foreign('building_type_id')->references('id')->on('building_types');
            $table->foreign('additional_feature_id')->references('id')->on('additional_features');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cost_estimates');
    }
};
