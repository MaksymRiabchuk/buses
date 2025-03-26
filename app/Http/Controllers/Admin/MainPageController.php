<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateMainPageRequest;
use App\Models\Blog;
use App\Models\Employee;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\MainPage;
use App\Models\Slider;
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

        $item['sliders'] = Slider::all()->toArray();
        $item['gallery'] = Gallery::all()->toArray();
        $item['faqs'] = Faq::all()->toArray();
        $item['employees'] = Employee::all()->toArray();

        return Inertia::render("$folderName", [
            'item' => $item,
            'isUpdating' => true,
        ]);
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
        Slider::all()->each(function (Slider $slider) {
            $slider->delete();
        });
        foreach ($data['sliders'] as $key => $value) {
            if (!Slider::where('id', $value['id'])->exists()) {
                $slider = new Slider();
                if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $value['image'])) {
                    $value['image'] = MainPage::processImage($value['image'], $key);
                }
                $slider->fill($value);
                $slider->save();
            }
        }

        Gallery::all()->each(function (Gallery $gallery) {
            $gallery->delete();
        });
        foreach ($data['gallery'] as $key => $value) {
            if (!Gallery::where('id', $value['id'])->exists()) {
                $gallery = new Gallery();
                if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $value['image'])) {
                    $value['image'] = MainPage::processImage($value['image'], $key);
                }
                $gallery->fill($value);
                $gallery->save();
            }
        }

        Faq::all()->each(function (Faq $faq) {
            $faq->delete();
        });
        foreach ($data['faqs'] as $key => $value) {
            if (!Faq::where('id', $value['id'])->exists()) {
                $faq = new Faq();
                $faq->fill($value);
                $faq->save();
            }
        }

        Employee::all()->each(function (Employee $employee) {
            $employee->delete();
        });
        foreach ($data['employees'] as $key => $value) {
            if (!Employee::where('id', $value['id'])->exists()) {
                $employee = new Employee();
                if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $value['image'])) {
                    $value['image'] = MainPage::processImage($value['image'], $key);
                }
                $employee->fill($value);
                $employee->save();
            }
        }

        $item = $model::where('id', 1)->first();
        if (!$item || !$item->update($data)) {
            return redirect()->route("$routeSegment.edit", 1)
                ->with('success', __('Помилка в редагуванні, дані не було змінено.'));
        }
        return redirect()->route("$routeSegment.edit", 1)->with('success', __('Відредаговано успішно.'));
    }
}
