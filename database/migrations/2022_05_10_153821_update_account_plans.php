<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('account_plans', function (Blueprint $table) {
            $table->boolean('paid')->default(false)->change();
            $table->string('reference')->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('account_plans', function (Blueprint $table) {
            $table->dropColumn(['paid', 'reference']);
        });
    }
};
