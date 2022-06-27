<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Services\CreateModelData;
use App\Traits\UploadImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Image;


class MessageController extends Controller
{
    use UploadImage;
    protected $directory, $createModelData;

    public function __construct(CreateModelData $createModelData)
    {
        $this->createModelData = $createModelData;
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function index()
    {
        $data = Message::all();
        return view($this->directory.'.data', ['data' => $data]);
    }

    public function all()
    {
        $data = Message::all();
        return view($this->directory.'.all', ['data' => $data]);
    }

    public function create()
    {
        $data = new Message();
        return view($this->directory.'.create', ['data' => $data]);
    }

    public function store(Request $request)
    {
        (new CreateModelData())->create($request, Message::class);
        session()->flash('success', 'Ваша заявка отправлено!');
        return back();
    }

    public function show(Message $message)
    {
        return view($this->directory.'.data-single', ['data' => $message]);
    }

    public function edit(Message $message)
    {
        return view($this->directory.'.create', ['data' => $message]);
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return back();
    }
}
