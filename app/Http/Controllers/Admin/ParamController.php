<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParamRequest;
use App\Http\Services\FilterableController;
use App\Models\Param;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ParamController extends Controller
{
    use FilterableController;
    const MODEL = Param::class;
    const FOLDER_NAME = 'Admin/Param';
    const ROUTE_SEGMENT = 'params';
    const PER_PAGE = 10;

    public function getFilterData()
    {
        return [
            ['name' => 'name', 'searchType' => "%", 'label' => __('Назва'), 'type' => 'text', 'placeholder' => __('feedback_email')],
            ['name' => 'value', 'searchType' => "%", 'label' => __('Значення'), 'type' => 'text', 'placeholder' => __('example@gmai.com')],
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

    public function create()
    {
        $folderName = self::FOLDER_NAME;
        return Inertia::render("$folderName/Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreParamRequest $request)
    {
        $model = self::MODEL;
        $routeSegment = self::ROUTE_SEGMENT;
        $data = $request->all();
        $item = new $model();
        $item->fill($data);
        if(!$item->save()){
            redirect()->route("$routeSegment.index")->with('danger', __('Неправильні дані. Параметр не було створено'));
        }
        return redirect()->route("$routeSegment.index")->with('success', __('Успішно створено.'));
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

    public function update(StoreParamRequest $request, int $id)
    {
        $model = self::MODEL;
        $routeSegment = self::ROUTE_SEGMENT;
        if (!$model::where('id', $id)->exists()) {
            redirect()->route("$routeSegment.index")->with('danger', __('Такого параметру не існує'));
        }
        $data = $request->all();
        $item = $model::where('id', $id)->first();
        $item->fill($data);
        if (!$item->save()) {
            redirect()->route("$routeSegment.index")->with('danger', __('Помилка в заповнені. Параметр не було відредаговано'));
        }
        return redirect()->route("$routeSegment.index")->with('success', __('Успішно змінено.'));
    }
}
