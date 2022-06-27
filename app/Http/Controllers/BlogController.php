<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Services\CreateModelData;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::paginate(15);
        return view(substr(\Request::segment(1), 0, -1).'.data', ['data' => $data]);
    }

    public function all()
    {
        $data = Blog::all();
        return view(substr(\Request::segment(1), 0, -1).'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Blog();
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        (new CreateModelData())->create($request, Blog::class);
        return back();
    }

    public function show(Blog $blog)
    {
        return view(substr(\Request::segment(1), 0, -1).'.data-single', ['data' => $blog]);
    }

    public function edit(Blog $blog)
    {
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $blog]);
    }

    public function update(Request $request, Blog $blog)
    {
        //
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }
}
