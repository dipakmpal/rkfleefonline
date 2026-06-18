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
        Schema::table('users', function (Blueprint $table) {
            //

            $table->string('address')->nullable();
            $table->string('state')->nullable();
            $table->string('pincode')->nullable();
            $table->string('city')->nullable();
            $table->string('gstNumber')->nullable();
            $table->string('customercode')->nullable();
            $table->string('underGroup')->nullable();
            $table->string('panNumber')->unique()->nullable();
            $table->string('adharNumber')->unique()->nullable();
            $table->string('remark')->nullable();

            $table->string('usertype')->nullable()->comment('0 = customer, 1 = staff, 2 = driver');

            $table->string('monumber')->nullable();
            $table->string('contactperson')->nullable();
            $table->string('hirer')->nullable();
            $table->string('whatsappNumber')->nullable();
            $table->string('tds')->nullable();
            $table->string('openingbalance')->nullable();
            $table->string('openingbalancestatus')->nullable();
            $table->string('vendorcode')->nullable();
            $table->string('biltycharges')->nullable();
            $table->string('creditlimit')->nullable();
            $table->string('billformate')->nullable();
            $table->string('transporterparty')->nullable();
            $table->string('partyType')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn([
                'address',
                'state',
                'pincode',
                'city',
                'gstNumber',
                'customercode',
                'underGroup',
                'panNumber',
                'adharNumber',
                'remark',
                'usertype',
                'monumber',
                'contactperson',
                'hirer',
                'whatsappNumber',
                'tds',
                'openingbalance',
                'openingbalancestatus',
                'vendorcode',
                'biltycharges',
                'creditlimit',
                'billformate',
                'transporterparty',
                'partyType'
            ]);
        });
    }
};
