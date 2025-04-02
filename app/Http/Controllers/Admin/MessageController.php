<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParamRequest;
use App\Http\Services\FilterableController;
use App\Models\Message;
use App\Models\Param;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MessageController extends Controller
{
    use FilterableController;

    const MODEL = Message::class;
    const FOLDER_NAME = 'Admin/Message';
    const ROUTE_SEGMENT = 'messages';
    const PER_PAGE = 10;

    public function getFilterData()
    {
        return [
            ['name' => 'name', 'searchType' => "%", 'label' => __('Імʼя'), 'type' => 'text', 'placeholder' => __('Oleksiy')],
            ['name' => 'email', 'searchType' => "%", 'label' => __('Ел. пошта'), 'type' => 'text', 'placeholder' => __('example@gmail.com')],
            ['name' => 'phone', 'searchType' => "%", 'label' => __('Мобільний телефон'), 'type' => 'text', 'placeholder' => __('+38 098 765 4321')],
            ['name' => 'message', 'searchType' => "%", 'label' => __('Повідомлення'), 'type' => 'text', 'placeholder' => __('Some text here')],
        ];
    }

    public function index(Request $request)
    {
        $model = self::MODEL;
        $folderName = self::FOLDER_NAME;
        $query = self::prepareFilterQuery($request, $model, $this->getFilterData());
        $perPage = $request->input('per_page');
        if (empty($perPage)) {
            $perPage = self::PER_PAGE;
        }

        $items = $query->orderBy('created_at', 'desc')->paginate($perPage)->appends($request->all());
        return Inertia::render("$folderName/Index", [
            'items' => $items,
            'total' => $items->total(),
            'filters' => $this->getFilterData(),
            'filterValues' => $request->all($this->getOnly($this->getFilterData())),
            'perPage' => (int)$perPage
        ]);
    }

    /**
     * @param $filters
     * @return array
     */

    public function getOnly($filters)
    {
        $only = [];
        foreach ($filters as $filter) {
            $only[] = $filter['name'];
        }
        return $only;
    }

    public function edit($id)
    {
        $model = self::MODEL;
        $folderName = self::FOLDER_NAME;
        $item = $model::findOrFail($id);
        return Inertia::render("$folderName/Create", [
            'item' => $item,
            'isUpdating' => true,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        /* @var $item Message */
        $routeSegment = self::ROUTE_SEGMENT;
        $model = self::MODEL;
        $item = $model::findOrFail($id);
        $item->delete();
        return redirect()->route("$routeSegment.index")->with('success', __('Успішно видалено.'));
    }

}
