<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMainPageRequest;
use App\Models\Blog;
use App\Models\MainPage;
use Inertia\Inertia;

class MainPageController extends Controller
{
    const MODEL = MainPage::class;
    const FOLDER_NAME = 'Admin/MainPage';
    const ROUTE_SEGMENT = 'main_page';
    const PER_PAGE = 10;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $folderName = self::FOLDER_NAME;

        return Inertia::render("$folderName/Index", [
            'items' => [],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $model = self::MODEL;
        $folderName = self::FOLDER_NAME;
        $item = $model::findOrFail(1);
        return Inertia::render("$folderName", ['item' => $item, 'isUpdating' => true]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMainPageRequest $request)
    {
        $model = self::MODEL;
        $routeSegment = self::ROUTE_SEGMENT;
        $data = $request->all();
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['first_main_image'])) {
            $data['first_main_image'] = MainPage::processImage($data['first_main_image'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['slider_img_1'])) {
            $data['slider_img_1'] = MainPage::processImage($data['slider_img_1'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['slider_img_2'])) {
            $data['slider_img_2'] = MainPage::processImage($data['slider_img_2'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['slider_img_3'])) {
            $data['slider_img_3'] = MainPage::processImage($data['slider_img_3'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['slider_img_4'])) {
            $data['slider_img_4'] = MainPage::processImage($data['slider_img_4'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['slider_img_5'])) {
            $data['slider_img_5'] = MainPage::processImage($data['slider_img_5'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['slider_img_6'])) {
            $data['slider_img_6'] = MainPage::processImage($data['slider_img_6'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['gallery_item_image_1'])) {
            $data['gallery_item_image_1'] = MainPage::processImage($data['gallery_item_image_1'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['gallery_item_image_2'])) {
            $data['gallery_item_image_2'] = MainPage::processImage($data['gallery_item_image_2'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['gallery_item_image_3'])) {
            $data['gallery_item_image_3'] = MainPage::processImage($data['gallery_item_image_3'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['gallery_item_image_4'])) {
            $data['gallery_item_image_4'] = MainPage::processImage($data['gallery_item_image_4'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['gallery_item_image_5'])) {
            $data['gallery_item_image_5'] = MainPage::processImage($data['gallery_item_image_5'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['gallery_item_image_6'])) {
            $data['gallery_item_image_6'] = MainPage::processImage($data['gallery_item_image_6'], 1);
        }

        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['team_member_image_1'])) {
            $data['team_member_image_1'] = MainPage::processImage($data['team_member_image_1'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['team_member_image_2'])) {
            $data['team_member_image_2'] = MainPage::processImage($data['team_member_image_2'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['team_member_image_3'])) {
            $data['team_member_image_3'] = MainPage::processImage($data['team_member_image_3'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['team_member_image_4'])) {
            $data['team_member_image_4'] = MainPage::processImage($data['team_member_image_4'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['team_member_image_5'])) {
            $data['team_member_image_5'] = MainPage::processImage($data['team_member_image_5'], 1);
        }
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['team_member_image_6'])) {
            $data['team_member_image_6'] = MainPage::processImage($data['team_member_image_6'], 1);
        }

        $item = $model::where('id', 1)->first();
        if (!$item || !$item->update($data)) {
            return redirect()->route("$routeSegment.edit", 1)
                ->with('success', __('Помилка в редагуванні, дані не було змінено.'));
        }
        return redirect()->route("$routeSegment.edit", 1)->with('success', __('Відредаговано успішно.'));
    }
}
