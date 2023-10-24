<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('journals', function (Blueprint $table) {
            $table->string('author'); // Add a new 'author' column
        });
    }

    public function down()
    {
        Schema::table('journals', function (Blueprint $table) {
            $table->dropColumn('author'); // Remove the 'author' column in case of rollback
        });
    }
};
