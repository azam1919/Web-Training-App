<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMGIdInModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->unsignedBigInteger('m_g_id')->index('m_g_id');
            $table->foreign('m_g_id')->references('id')->on('modules_groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modules', function (Blueprint $table) {
            $table->dropForeign('m_g_id');
            $table->dropColumn('m_g_id');
        });
    }
}
