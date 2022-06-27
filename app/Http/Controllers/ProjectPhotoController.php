<?php

namespace App\Http\Controllers;

use App\Models\ProjectPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class ProjectPhotoController extends Controller
{
    public function index()
    {
        $data = ProjectPhoto::all();
        return view(substr(\Request::segment(1), 0, -1).'.data', ['data' => $data]);
    }

    public function create()
    {
        $data = ProjectPhoto::all();
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $values = Arr::except($request->all(), 'data_id');
        $data = ProjectPhoto::updateOrCreate(['id' => $request->data_id], $values);
        return back();
    }

    public function show(ProjectPhoto $projectPhoto)
    {
        return view(substr(\Request::segment(1), 0, -1).'.data-single', ['data' => $projectPhoto]);
    }

    public function edit(ProjectPhoto $projectPhoto)
    {
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $projectPhoto]);
    }

    public function update(Request $request, ProjectPhoto $projectPhoto)
    {
        //
    }

    public function destroy(ProjectPhoto $projectPhoto)
    {
        $projectPhoto->delete();
        return back();
    }
}
