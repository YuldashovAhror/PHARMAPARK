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
                            <h4 class="mb-0">Добавить Команда</h4>
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
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="position_uz">Должность uz</label>
                                        <input type="text" class="form-control" name="position_uz" id="position_uz" value="{{ $data?->position_uz }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="position_ru">Должность ru</label>
                                        <input type="text" class="form-control" name="position_ru" id="position_ru" value="{{ $data?->position_ru }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="position_en">Должность en</label>
                                        <input type="text" class="form-control" name="position_en" id="position_en" value="{{ $data?->position_en }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label class="form-label" for="photo">Фото</label>
                                        <input type="file" class="form-control" name="photo" id="photo">
                                        <img src="{{ $data?->photo }}" style="width: 150px;" alt="">
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
