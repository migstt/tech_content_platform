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
        Schema::table('weekly_news', function (Blueprint $table) {
            $table->text('news_string')->change();
        });
    }

    public function down()
    {
        Schema::table('weekly_news', function (Blueprint $table) {
            $table->string('news_string')->change();
        });
    }
};
