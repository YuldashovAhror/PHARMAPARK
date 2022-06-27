<?php

namespace App\Http\Controllers;

use App\Models\ProjectSvg;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class ProjectSvgController extends Controller
{
    public function index()
    {
        $data = ProjectSvg::all();
        return view(substr(\Request::segment(1), 0, -1).'.data', ['data' => $data]);
    }

    public function create()
    {
        $data = ProjectSvg::all();
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $values = Arr::except($request->all(), 'data_id');
        $data = ProjectSvg::updateOrCreate(['id' => $request->data_id], $values);
        return back();
    }

    public function show(ProjectSvg $projectSvg)
    {
        return view(substr(\Request::segment(1), 0, -1).'.data-single', ['data' => $projectSvg]);
    }

    public function edit(ProjectSvg $projectSvg)
    {
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $projectSvg]);
    }

    public function update(Request $request, ProjectSvg $projectSvg)
    {
        //
    }

    public function destroy(ProjectSvg $projectSvg)
    {
        $projectSvg->delete();
        return back();
    }
}
