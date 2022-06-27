<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\Vacation;
use App\Models\VacationCategory;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;


class VacationController extends Controller
{
    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = 'vacation';
    }

    public function index()
    {
        $n = 'name_'.session()->get('locale');
        $data = Partner::paginate(15);
        $category = VacationCategory::all();
        return view('vacation.data', [
            'data' => $data,
            'category' => $category
        ]);
    }

    public function all()
    {
        $data = Vacation::all();
        return view('vacation.all', [
            'data' => $data,
        ]);
    }

    public function create()
    {
        $data = new Vacation();
        return view('vacation.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $values = Arr::except($request->all(), ['data_id', 'photo']);
        if ($request->file('photo')){
            $values['photo'] = $this->uploadImage($request->file('photo'), $this->directory);
        }
        Vacation::updateOrCreate(['id' => $request->data_id], $values);
        return back();
    }

    public function show(Vacation $vacation)
    {
        return view('vacation.data-single', ['data' => $vacation]);
    }

    public function edit(Vacation $vacation)
    {
        return view('vacation.create', ['data' => $vacation]);
    }

    public function update(Request $request, Vacation $vacation)
    {
        //
    }

    public function destroy(Vacation $vacation)
    {
        $vacation->delete();
        return back();
    }
}
