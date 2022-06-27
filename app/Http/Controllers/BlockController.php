<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Services\CreateModelData;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class BlockController extends Controller
{
    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $data = Block::all();
        return view($this->directory.'.data', ['data' => $data]);
    }

    public function all()
    {
        $data = Block::all();
        return view($this->directory.'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Block();
        return view($this->directory.'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        (new CreateModelData())->create($request, Block::class);
        return back();
    }

    public function show(Block $block)
    {
        return view($this->directory.'.data-single', ['data' => $block]);
    }

    public function edit(Block $block)
    {
        return view($this->directory.'.create', ['data' => $block]);
    }

    public function destroy(Block $block)
    {
        $block->delete();
        return back();
    }
}
