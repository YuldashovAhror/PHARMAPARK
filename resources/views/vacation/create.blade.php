@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
          rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/libs/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
    <style>
        input#property_oz,
        input#property_uz {
            height: 60px;
        }
    </style>

@endsection

@section('content')
    
    <div class="container-fluid">
        
        <div class="row">
            <div class="col-xl-12">

                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Добавить ваканцию</h4>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <form action="/{{ \Request::segment(1) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="data_id" value="{{ $data?->id }}">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="name_uz">Название uz</label>
                                        <input type="text" class="form-control" name="name_uz" id="name_uz" value="{{ $data?->name_uz }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="name_ru">Название ru</label>
                                        <input type="text" class="form-control" name="name_ru" id="name_ru" value="{{ $data?->name_ru }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="name_en">Название en</label>
                                        <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $data?->name_en }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="company">Компания</label>
                                        <input type="text" class="form-control" name="company" id="company" value="{{ $data?->company }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="photo">Фото</label>
                                        <input type="file" class="form-control" name="photo" id="photo">
                                        <img src="{{ $data?->photo }}" style="width: 150px;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="category_id">Категория</label>
                                        <select class="form-select" name="category_id" id="category_id">
                                            @foreach(\App\Models\VacationCategory::get(['id', 'name_ru']) as $value)
                                                <option value="{{ $value->id }}">{{ $value->name_ru }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="duty_uz">Обязательство uz</label>
                                        <textarea name="duty_uz" class="form-text" id="duty_uz" cols="50" rows="10">{{ $data?->duty_uz }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="duty_ru">Обязательство ru</label>
                                        <textarea name="duty_ru" class="form-text" id="duty_ru" cols="50" rows="10">{{ $data?->duty_ru }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="duty_en">Обязательство en</label>
                                        <textarea name="duty_en" class="form-text" id="duty_en" cols="50" rows="10">{{ $data?->duty_en }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="requirements_uz">Требования uz</label>
                                        <textarea name="requirements_uz" class="form-text" id="requirements_uz" cols="50" rows="10">{{ $data?->requirements_uz }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="requirements_ru">Требования ru</label>
                                        <textarea name="requirements_ru" class="form-text" id="requirements_ru" cols="50" rows="10">{{ $data?->requirements_ru }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="requirements_en">Требования en</label>
                                        <textarea name="requirements_en" class="form-text" id="requirements_en" cols="50" rows="10">{{ $data?->requirements_en }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="requirements_uz">Условия uz</label>
                                        <textarea name="condition_uz" class="form-text" id="condition_uz" cols="50" rows="10">{{ $data?->condition_uz }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="requirements_ru">Условия ru</label>
                                        <textarea name="condition_ru" class="form-text" id="condition_ru" cols="50" rows="10">{{ $data?->condition_ru }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-4">
                                        <label class="form-label" for="requirements_en">Условия en</label>
                                        <textarea name="condition_en" class="form-text" id="condition_en" cols="50" rows="10">{{ $data?->condition_en }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-primary" type="submit">Saqlash</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    
    @section('script')
        
        <!-- Required datatable js -->
            <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <!-- Responsive examples -->
            <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
            
            <!-- Datatable init js -->
            <script src="/assets/js/pages/datatables.init.js"></script>
            
            
            <script src="/assets/libs/table-edits/build/table-edits.min.js"></script>
            
            <script src="/assets/js/pages/table-editable.int.js"></script>
            
            <script src="/assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
            
            <script src="/assets/js/pages/form-repeater.int.js"></script>
            <script src="{{ asset('assets/js/pages/bootstrap-tagsinput.min.js') }}"></script>

        <script src="/ckeditor/ckeditor.js"></script>
            @foreach(['uz', 'en', 'ru'] as $lang)
                <script>
                    CKEDITOR.replace('description_{{ $lang }}', {
                        "height": 250,
                        "toolbarGroups": [{"name": "document", "groups": ["mode", "document", "doctools"]}, {
                            "name": "clipboard",
                            "groups": ["clipboard", "undo"]
                        }, {
                            "name": "editing",
                            "groups": ["find", "selection", "spellchecker"]
                        }, {"name": "forms"}, "/", {
                            "name": "basicstyles",
                            "groups": ["basicstyles", "colors", "cleanup"]
                        }, {
                            "name": "paragraph",
                            "groups": ["list", "indent", "blocks", "align", "bidi"]
                        }, {"name": "links"}, {"name": "insert"}, "/", {"name": "styles"}, {"name": "blocks"}, {"name": "colors"}, {"name": "tools"}, {"name": "others"}],
                        "filebrowserBrowseUrl": "/laravel-filemanager",
                        "filebrowserImageBrowseUrl": "/laravel-filemanager?filter=image",
                        "filebrowserFlashBrowseUrl": "/laravel-filemanager?filter=flash",
                        "language": "{{ $lang }}"
                    });
                </script>
    @endforeach
@endsection
