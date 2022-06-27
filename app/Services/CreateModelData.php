<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 02.06.2022
 * Time: 14:02
 */

namespace App\Services;


use App\Traits\UploadImage;
use Illuminate\Support\Arr;

class CreateModelData
{
    use UploadImage;
    protected $directory;

    public function __construct()
    {
        $this->directory = substr(\Request::segment(1), 0, -1);
    }

    public function create($request, $model)
    {
        $values = Arr::except($request->all(), ['data_id', 'file']);
        if ($request->file('file')){
            $values['file'] = $this->uploadImage($request->file('file'), $this->directory);
        }
        if ($request->file('photo')){
            $values['photo'] = $this->uploadImage($request->file('photo'), $this->directory);
        }
        $model::updateOrCreate(['id' => $request->data_id], $values);
    }

}