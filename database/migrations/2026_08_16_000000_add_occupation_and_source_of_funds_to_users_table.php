<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'occupation')) {
                $table->string('occupation')->nullable()->after('country');
            }
            if (!Schema::hasColumn('users', 'source_of_funds')) {
                $table->string('source_of_funds')->nullable()->after('occupation');
            }
            if (!Schema::hasColumn('users', 'national_insurance_number')) {
                $table->string('national_insurance_number')->nullable()->after('source_of_funds');
            }
            if (!Schema::hasColumn('users', 'dob')) {
                $table->string('dob')->nullable()->after('national_insurance_number');
            }
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['occupation', 'source_of_funds', 'national_insurance_number']);
        });
    }
};
