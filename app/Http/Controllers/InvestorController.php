<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use App\Services\CreateModelData;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Image;

class InvestorController extends Controller
{
    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $n = 'name_'.session()->get('locale');
        $data = Investor::paginate(15);
        return view($this->directory.'.data', ['data' => $data, 'n' => $n]);
    }

    public function all()
    {
        $data = Investor::all();
        return view($this->directory.'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Investor();
        return view($this->directory.'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        (new CreateModelData())->create($request, Investor::class);
        return back();
    }

    public function show(Investor $investor)
    {
        return view($this->directory.'.data-single', ['data' => $investor]);
    }

    public function edit(Investor $investor)
    {
        return view($this->directory.'.create', ['data' => $investor]);
    }

    public function destroy(Investor $investor)
    {
        $investor->delete();
        return back();
    }
}
