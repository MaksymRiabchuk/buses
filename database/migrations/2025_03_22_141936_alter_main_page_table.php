<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('main_page', function (Blueprint $table) {
            $table->dropColumn('about_us_btn_text');
            $table->string('team_member_image_1')->nullable();
            $table->string('team_member_image_2')->nullable();
            $table->string('team_member_image_3')->nullable();
            $table->string('team_member_image_4')->nullable();
            $table->string('team_member_image_5')->nullable();
            $table->string('team_member_image_6')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('main_page', function (Blueprint $table) {
            $table->string('about_us_btn_text')->nullable();
            $table->dropColumn('team_member_image_1');
            $table->dropColumn('team_member_image_2');
            $table->dropColumn('team_member_image_3');
            $table->dropColumn('team_member_image_4');
            $table->dropColumn('team_member_image_5');
            $table->dropColumn('team_member_image_6');
        });
    }
};
