<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutUsPageRequest;
use App\Http\Requests\UpdateMainPageRequest;
use App\Http\Requests\UpdateOurTeamPageRequest;
use App\Models\AboutUsPage;
use App\Models\Employee;
use App\Models\MainPage;
use App\Models\OurTeam;
use App\Models\Review;
use Inertia\Inertia;

class OurTeamPageController extends Controller
{
    const MODEL = OurTeam::class;
    const FOLDER_NAME = 'Admin/OurTeamPage';
    const ROUTE_SEGMENT = 'our_team';
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

        $item['employees'] = Employee::all()->toArray();
        return Inertia::render("$folderName", [
            'item' => $item,
            'isUpdating' => true,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOurTeamPageRequest $request)
    {
        $model = self::MODEL;
        $routeSegment = self::ROUTE_SEGMENT;
        $data = $request->all();
        if (preg_match('/^data:(image\/(\w+));base64,(.+)$/', $data['first_main_image'])) {
            $data['first_main_image'] = OurTeam::processImage($data['first_main_image'], 1);
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
