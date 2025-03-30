<?php

use App\Models\OurTeam;
use Carbon\Carbon;
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
        Schema::create('our_teams', function (Blueprint $table) {
            $table->id();
            $table->string('first_main_image')->nullable();
            $table->string('first_main_text')->nullable();

            $table->string('about_us_text')->nullable();
            $table->timestamps();
        });
        OurTeam::insert(['id'=>1,'created_at' => Carbon::today(), 'updated_at' => Carbon::today()]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_teams');
    }
};
