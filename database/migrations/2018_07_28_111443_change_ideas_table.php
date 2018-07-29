<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeIdeasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ideas', function (Blueprint $table) {
            $table->text('insert_date_time')->nullable()->change();
            $table->text('insert_name')->nullable()->change();
            $table->text('delete_flag')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ideas', function (Blueprint $table) {
            $table->text('insert_date_time')->nullable(false)->change();
            $table->text('insert_name')->nullable(false)->change();
            $table->text('delete_flag')->nullable(false)->change();
        });
    }
}
