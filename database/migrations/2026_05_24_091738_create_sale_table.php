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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('billno');
            $table->date('date');
            $table->string('customer_name');            
            $table->text('noteforsale')->nullable();
            $table->string('gstinstatecode')->nullable();
            $table->string('shippingaddress')->nullable();
            $table->string('transportername')->nullable();
            $table->string('vehicleno')->nullable();
            $table->string('ewaybillno')->nullable();
            $table->timestamps();
        });
    }

    protected $fillable = [
        'billno',
        'date',
        'customer_name',
        'noteforsale',
        'shippingaddress',
        'gstinstatecode',
        'transportername',
        'vehicleno',
        'ewaybillno',
    ];

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
