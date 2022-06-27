<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Services\CreateModelData;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Image;


class ProjectController extends Controller
{

    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $data = Project::all();
        return view(substr(\Request::segment(1), 0, -1).'.data', ['data' => $data]);
    }

    public function all()
    {
        $data = Project::all();
        return view($this->directory.'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Project();
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        (new CreateModelData())->create($request, Project::class);
        return back();
    }

    public function show(Project $project)
    {
        return view(substr(\Request::segment(1), 0, -1).'.data-single', ['data' => $project]);
    }

    public function edit(Project $project)
    {
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $project]);
    }

    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return back();
    }
}
