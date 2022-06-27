<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Services\CreateModelData;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Image;


class GalleryController extends Controller
{    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $data = Gallery::all();
        return view($this->directory.'.data', ['data' => $data]);
    }

    public function all()
    {
        $data = Gallery::all();
        return view($this->directory.'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Gallery();
        return view($this->directory.'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        (new CreateModelData())->create($request, Gallery::class);
        return back();
    }

    public function show(Gallery $gallery)
    {
        return view($this->directory.'.data-single', ['data' => $gallery]);
    }

    public function edit(Gallery $gallery)
    {
        return view($this->directory.'.create', ['data' => $gallery]);
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return back();
    }
}
