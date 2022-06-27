<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Report;
use App\Services\CreateModelData;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Image;

class ReportController extends Controller
{
    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $data = Report::paginate(9);
        return view($this->directory.'.data', ['data' => $data]);
    }

    public function all()
    {
        $data = Report::all();
        return view($this->directory.'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Report();
        return view($this->directory.'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $values = Arr::except($request->all(), ['data_id', 'photo']);
        if ($request->file('photo')){
            $values['photo'] = $this->uploadImage($request->file('photo'), $this->directory);
        }
        Report::updateOrCreate(['id' => $request->data_id], $values);

        return back();
    }

    public function show(Report $report)
    {
        return view($this->directory.'.data-single', ['data' => $report]);
    }

    public function edit(Report $report)
    {
        return view($this->directory.'.create', ['data' => $report]);
    }

    public function destroy(Report $report)
    {
        $report->delete();
        return back();
    }
}
