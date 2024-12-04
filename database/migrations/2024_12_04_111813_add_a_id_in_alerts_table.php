<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAIdInAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alerts', function (Blueprint $table) {
            $table->unsignedBigInteger('a_id')->index('a_id')->nullable();
            $table->foreign('a_id')->references('id')->on('alerts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alerts', function (Blueprint $table) {
            $table->dropForeign('a_id');
            $table->dropColumn('a_id');
        });
    }
}
