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
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasTable('users') && !Schema::hasColumn('users', 'number_id')) {
				$table->string('number_id')->after('id')->nullable();
			}
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasTable('users') && Schema::hasColumn('users', 'number_id')) {
				$table->dropColumn('number_id');
			}
        });
    }
};
