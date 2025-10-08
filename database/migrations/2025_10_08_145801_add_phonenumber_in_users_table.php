<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
            $table->string('PhoneNumber')->unique()->after('email')->nullable();
            $table->timestamp('PhoneNumber_verified_at')->after('PhoneNumber')->nullable();
            $table->string('Activation_code')->after('PhoneNumber_verified_at')->nullable();
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->change();

            $table->dropColumn([
                'PhoneNumber',
                'PhoneNumber_verified_at',
                'Activation_code'
            ]);
        });
    }
};
