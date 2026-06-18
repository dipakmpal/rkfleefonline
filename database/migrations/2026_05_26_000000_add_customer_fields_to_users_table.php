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
            $table->string('usertype')->nullable()->after('password');
            $table->string('customerCode')->nullable()->after('usertype');
            $table->string('customercode')->nullable()->after('customerCode');
            $table->string('contactperson')->nullable()->after('customercode');
            $table->string('contactnumber')->nullable()->after('contactperson');
            $table->string('address')->nullable()->after('contactnumber');
            $table->string('city')->nullable()->after('address');
            $table->string('state')->nullable()->after('city');
            $table->string('country')->nullable()->after('state');
            $table->string('pincode')->nullable()->after('country');
            $table->string('gstNumber')->nullable()->after('pincode');
            $table->string('underGroup')->nullable()->after('gstNumber');
            $table->string('panNumber')->nullable()->after('underGroup');
            $table->string('adharNumber')->nullable()->after('panNumber');
            $table->text('remark')->nullable()->after('adharNumber');
            $table->string('monumber')->nullable()->after('remark');
            $table->string('hirer')->nullable()->after('monumber');
            $table->string('whatsappNumber')->nullable()->after('hirer');
            $table->decimal('tds', 8, 2)->nullable()->after('whatsappNumber');
            $table->decimal('openingbalance', 15, 2)->nullable()->after('tds');
            $table->string('openingbalancestatus')->nullable()->after('openingbalance');
            $table->string('vendorcode')->nullable()->after('openingbalancestatus');
            $table->decimal('biltycharges', 15, 2)->nullable()->after('vendorcode');
            $table->decimal('creditlimit', 15, 2)->nullable()->after('biltycharges');
            $table->string('billformate')->nullable()->after('creditlimit');
            $table->string('transporterparty')->nullable()->after('billformate');
            $table->string('partyType')->nullable()->after('transporterparty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'usertype',
                'customerCode',
                'customercode',
                'contactperson',
                'contactnumber',
                'address',
                'city',
                'state',
                'country',
                'pincode',
                'gstNumber',
                'underGroup',
                'panNumber',
                'adharNumber',
                'remark',
                'monumber',
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
                'partyType',
            ]);
        });
    }
};
