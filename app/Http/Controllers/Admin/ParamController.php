<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreParamRequest;
use Inertia\Inertia;

class ParamController extends Controller
{
    public function index()
    {
        return Inertia::render('Admin/Param/Index', [
            'data'=>[]
        ]);
    }

    public function create()
    {
        return Inertia::render('Admin/Param/Create', [
            'data'=>[]
        ]);
    }

    public function edit()
    {
        return Inertia::render('Admin/Param/Create', [
            'data'=>[]
        ]);
    }

    public function store(StoreParamRequest $request)
    {
        $data=$request->validated();

    }

    public function update(StoreParamRequest $request)
    {
        $data=$request->validated();
        return redirect()->route("param.index")->with('success', __('Успішно створено.'));
    }
}
