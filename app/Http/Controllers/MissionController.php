<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use App\Services\CreateModelData;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Image;


class MissionController extends Controller
{
    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $data = Mission::all();
        return view(substr(\Request::segment(1), 0, -1).'.data', ['data' => $data]);
    }
    public function all()
    {
        $data = Mission::all();
        return view(substr(\Request::segment(1), 0, -1).'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Mission();
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        (new CreateModelData())->create($request, Mission::class);
        return back();
    }

    public function show(Mission $mission)
    {
        return view(substr(\Request::segment(1), 0, -1).'.data-single', ['data' => $mission]);
    }

    public function edit(Mission $mission)
    {
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $mission]);
    }

    public function update(Request $request, Mission $mission)
    {
        $values = Arr::except($request->all(), 'data_id');
        $data = Mission::updateOrCreate(['id' => $request->data_id], $values);
        return back();
    }

    
    public function destroy(Mission $mission)
    {
        $mission->delete();
        return back();
    }
}
