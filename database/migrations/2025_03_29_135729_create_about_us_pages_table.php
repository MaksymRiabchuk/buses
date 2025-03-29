<?php

use App\Models\AboutUsPage;
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
        Schema::create('about_us_page', function (Blueprint $table) {
            $table->id();
            $table->string('first_main_image')->nullable();
            $table->text('first_main_text')->nullable();

            $table->text('reasons_main_text')->nullable();
            $table->string('reason_title_1')->nullable();
            $table->string('reason_title_2')->nullable();
            $table->string('reason_title_3')->nullable();
            $table->text('reason_text_1')->nullable();
            $table->text('reason_text_2')->nullable();
            $table->text('reason_text_3')->nullable();

            $table->string('reviews_side_image')->nullable();

            $table->text('our_history_text')->nullable();
            $table->text('our_history_image')->nullable();
            $table->text('our_history_title_mark_1')->nullable();
            $table->text('our_history_title_mark_2')->nullable();
            $table->text('our_history_title_mark_3')->nullable();
            $table->text('our_history_title_mark_4')->nullable();
            $table->text('our_history_title_mark_5')->nullable();
            $table->timestamps();
        });
        AboutUsPage::insert(['id'=>1,'created_at' => Carbon::today(), 'updated_at' => Carbon::today()]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_page');
    }
};
