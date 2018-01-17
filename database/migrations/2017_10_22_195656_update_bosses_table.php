<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bosses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->renameColumn("photo", "link");
        });
        Schema::table('bosses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->binary('photo')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bosses');
    }
}