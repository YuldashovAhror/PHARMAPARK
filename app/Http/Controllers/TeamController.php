<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Traits\UploadImage;


class TeamController extends Controller
{
    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $data = Team::all();
        return view(substr(\Request::segment(1), 0, -1).'.data', ['data' => $data]);
    }
    public function all(){
        $data = Team::all();
        return view(substr(\Request::segment(1), 0, -1).'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Team();
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $values = Arr::except($request->all(), 'data_id');

        if ($request->file('photo')){
            $values['photo'] = $this->uploadImage($request->file('photo'), $this->directory);
        }

        $data = Team::updateOrCreate(['id' => $request->data_id], $values);
        return back();
    }

    public function show(Team $team)
    {
        return view(substr(\Request::segment(1), 0, -1).'.data-single', ['data' => $team]);
    }

    public function edit(Team $team)
    {
        return view(substr(\Request::segment(1), 0, -1).'.create', ['data' => $team]);
    }

    public function update(Request $request, Team $team)
    {
        //
    }

    public function destroy(Team $team)
    {
        $team->delete();
        return back();
    }
}
