<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Services\CreateModelData;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Image;


class PartnerController extends Controller
{
    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $data = Partner::all();
        return view(substr(\Request::segment(1), 0, -1).'.data', ['data' => $data]);
    }

    public function all()
    {
        $data = Partner::all();
        return view(substr(\Request::segment(1), 0, -1).'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Partner();
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        (new CreateModelData())->create($request, Partner::class);
        return back();
    }

    public function show(Partner $partner)
    {
        return view(substr(\Request::segment(1), 0, -1).'.data-single', ['data' => $partner]);
    }

    public function edit(Partner $partner)
    {
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $partner]);
    }

    public function update(Request $request, Partner $partner)
    {
        //
    }

    public function destroy(Partner $partner)
    {
        $partner->delete();
        return back();
    }
}
