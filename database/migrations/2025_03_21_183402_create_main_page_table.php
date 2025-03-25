<?php

use App\Models\MainPage;
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
        Schema::create('main_page', function (Blueprint $table) {
            $table->id();
            $table->string('first_main_image')->nullable();
            $table->string('first_main_title',32)->nullable();
            $table->text('first_main_text')->nullable();
            $table->string('first_main_btn_text',32)->nullable();

            $table->string('slider_title_1',32)->nullable();
            $table->string('slider_text_1')->nullable();
            $table->string('slider_title_2',32)->nullable();
            $table->string('slider_text_2')->nullable();
            $table->string('slider_title_3',32)->nullable();
            $table->string('slider_text_3')->nullable();
            $table->string('slider_title_4',32)->nullable();
            $table->string('slider_text_4')->nullable();
            $table->string('slider_title_5',32)->nullable();
            $table->string('slider_text_5')->nullable();
            $table->string('slider_title_6',32)->nullable();
            $table->string('slider_text_6')->nullable();
            $table->string('slider_img_1')->nullable();
            $table->string('slider_img_2')->nullable();
            $table->string('slider_img_3')->nullable();
            $table->string('slider_img_4')->nullable();
            $table->string('slider_img_5')->nullable();
            $table->string('slider_img_6')->nullable();


            $table->string('about_us_text')->nullable();
            $table->string('about_us_btn_text')->nullable();
            $table->string('about_us_item_title_1',32)->nullable();
            $table->string('about_us_item_text_1')->nullable();
            $table->string('about_us_item_title_2',32)->nullable();
            $table->string('about_us_item_text_2')->nullable();
            $table->string('about_us_item_title_3',32)->nullable();
            $table->string('about_us_item_text_3')->nullable();

            $table->string('gallery_text')->nullable();
            $table->string('gallery_item_image_1')->nullable();
            $table->string('gallery_item_title_1',32)->nullable();
            $table->string('gallery_item_image_2')->nullable();
            $table->string('gallery_item_title_2',32)->nullable();
            $table->string('gallery_item_image_3')->nullable();
            $table->string('gallery_item_title_3',32)->nullable();
            $table->string('gallery_item_image_4')->nullable();
            $table->string('gallery_item_title_4',32)->nullable();
            $table->string('gallery_item_image_5')->nullable();
            $table->string('gallery_item_title_5',32)->nullable();
            $table->string('gallery_item_image_6')->nullable();
            $table->string('gallery_item_title_6',32)->nullable();

            $table->string('faqs_text')->nullable();
            $table->string('faqs_item_question_1')->nullable();
            $table->string('faqs_item_answer_1')->nullable();
            $table->string('faqs_item_question_2')->nullable();
            $table->string('faqs_item_answer_2')->nullable();
            $table->string('faqs_item_question_3')->nullable();
            $table->string('faqs_item_answer_3')->nullable();

            $table->string('review_item_text_1')->nullable();
            $table->string('review_item_author_1')->nullable();
            $table->string('review_item_text_2')->nullable();
            $table->string('review_item_author_2')->nullable();
            $table->string('review_item_text_3')->nullable();
            $table->string('review_item_author_3')->nullable();
            $table->string('review_item_text_4')->nullable();
            $table->string('review_item_author_4')->nullable();

            $table->string('team_member_name_1')->nullable();
            $table->string('team_member_position_1')->nullable();
            $table->string('team_member_name_2')->nullable();
            $table->string('team_member_position_2')->nullable();
            $table->string('team_member_name_3')->nullable();
            $table->string('team_member_position_3')->nullable();
            $table->string('team_member_name_4')->nullable();
            $table->string('team_member_position_4')->nullable();
            $table->string('team_member_name_5')->nullable();
            $table->string('team_member_position_5')->nullable();
            $table->string('team_member_name_6')->nullable();
            $table->string('team_member_position_6')->nullable();

            $table->timestamps();
        });
        MainPage::insert(['id'=>1,'created_at' => Carbon::today(), 'updated_at' => Carbon::today()]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_page');
    }
};

