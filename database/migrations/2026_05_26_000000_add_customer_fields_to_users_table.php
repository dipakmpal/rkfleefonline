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
            if (!Schema::hasColumn('users', 'usertype')) {
                $table->string('usertype')->nullable()->after('password');
            }
            if (!Schema::hasColumn('users', 'customerCode')) {
                $table->string('customerCode')->nullable()->after('usertype');
            }
            if (!Schema::hasColumn('users', 'customercode')) {
                $table->string('customercode')->nullable()->after('customerCode');
            }
            if (!Schema::hasColumn('users', 'contactperson')) {
                $table->string('contactperson')->nullable()->after('customercode');
            }
            if (!Schema::hasColumn('users', 'contactnumber')) {
                $table->string('contactnumber')->nullable()->after('contactperson');
            }
            if (!Schema::hasColumn('users', 'city')) {
                $table->string('city')->nullable()->after('address');
            }
            if (!Schema::hasColumn('users', 'state')) {
                $table->string('state')->nullable()->after('city');
            }
            if (!Schema::hasColumn('users', 'country')) {
                $table->string('country')->nullable()->after('state');
            }
            if (!Schema::hasColumn('users', 'pincode')) {
                $table->string('pincode')->nullable()->after('country');
            }
            if (!Schema::hasColumn('users', 'gstNumber')) {
                $table->string('gstNumber')->nullable()->after('pincode');
            }
            if (!Schema::hasColumn('users', 'underGroup')) {
                $table->string('underGroup')->nullable()->after('gstNumber');
            }
            if (!Schema::hasColumn('users', 'panNumber')) {
                $table->string('panNumber')->nullable()->after('underGroup');
            }
            if (!Schema::hasColumn('users', 'adharNumber')) {
                $table->string('adharNumber')->nullable()->after('panNumber');
            }
            if (!Schema::hasColumn('users', 'remark')) {
                $table->text('remark')->nullable()->after('adharNumber');
            }
            if (!Schema::hasColumn('users', 'monumber')) {
                $table->string('monumber')->nullable()->after('remark');
            }
            if (!Schema::hasColumn('users', 'hirer')) {
                $table->string('hirer')->nullable()->after('monumber');
            }
            if (!Schema::hasColumn('users', 'whatsappNumber')) {
                $table->string('whatsappNumber')->nullable()->after('hirer');
            }
            if (!Schema::hasColumn('users', 'tds')) {
                $table->decimal('tds', 8, 2)->nullable()->after('whatsappNumber');
            }
            if (!Schema::hasColumn('users', 'openingbalance')) {
                $table->decimal('openingbalance', 15, 2)->nullable()->after('tds');
            }
            if (!Schema::hasColumn('users', 'openingbalancestatus')) {
                $table->string('openingbalancestatus')->nullable()->after('openingbalance');
            }
            if (!Schema::hasColumn('users', 'vendorcode')) {
                $table->string('vendorcode')->nullable()->after('openingbalancestatus');
            }
            if (!Schema::hasColumn('users', 'biltycharges')) {
                $table->decimal('biltycharges', 15, 2)->nullable()->after('vendorcode');
            }
            if (!Schema::hasColumn('users', 'creditlimit')) {
                $table->decimal('creditlimit', 15, 2)->nullable()->after('biltycharges');
            }
            if (!Schema::hasColumn('users', 'billformate')) {
                $table->string('billformate')->nullable()->after('creditlimit');
            }
            if (!Schema::hasColumn('users', 'transporterparty')) {
                $table->string('transporterparty')->nullable()->after('billformate');
            }
            if (!Schema::hasColumn('users', 'partyType')) {
                $table->string('partyType')->nullable()->after('transporterparty');
            }
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
                'is_delete',
            ]);
        });
    }
};
