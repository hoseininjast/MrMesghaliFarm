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
        Schema::create('bulk_purchases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('UserID');
            $table->foreign('UserID')->on('users')->references('id')->cascadeOnDelete();
            $table->text('Products');
            $table->enum('Status' , ['Pending' , 'Paid' ,'Finished' , 'Canceled']);
            $table->bigInteger('Price')->nullable();
            $table->float('Percentage')->nullable();
            $table->bigInteger('Commission')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bulk_purchases');
    }
};
