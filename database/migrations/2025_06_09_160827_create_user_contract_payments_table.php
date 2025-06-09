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
        Schema::create('user_contract_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ContractID');
            $table->foreign('ContractID')->references('id')->on('user_contracts');
            $table->datetime('PaymentDate');
            $table->integer('Amount')->nullable();
            $table->float('Percent')->nullable();
            $table->string('VerificationNumber')->nullable();
            $table->string('ReferenceNumber')->nullable();
            $table->enum('Status' , ['Pending' , 'Paid']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_contract_payments');
    }
};
