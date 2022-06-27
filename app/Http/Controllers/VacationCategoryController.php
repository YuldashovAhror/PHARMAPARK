<?php

namespace App\Http\Controllers;

use App\Models\VacationCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class VacationCategoryController extends Controller
{
    public function index()
    {
        $data = VacationCategory::all();
        return view(substr(\Request::segment(1), 0, -1).'.data', ['data' => $data]);
    }

    public function all()
    {
        $data = VacationCategory::all();
        return view(substr(\Request::segment(1), 0, -1).'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new VacationCategory();
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $values = Arr::except($request->all(), 'data_id');
        $data = VacationCategory::updateOrCreate(['id' => $request->data_id], $values);
        return back();
    }

    public function show(VacationCategory $vacationCategory)
    {
        return view(substr(\Request::segment(1), 0, -1).'.data-single', ['data' => $vacationCategory]);
    }

    public function edit(VacationCategory $vacationCategory)
    {
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $vacationCategory]);
    }

    public function update(Request $request, VacationCategory $vacationCategory)
    {
        //
    }

    public function destroy(VacationCategory $vacationCategory)
    {
        $vacationCategory->delete();
        return back();
    }
}
