@extends('layouts.app')

@section('css')
    <!-- DataTables -->
    <link href="{{ asset('/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- DataTables -->
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>

    <!-- Responsive datatable examples -->
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
          type="text/css"/>

    <link href="{{ asset('/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <!-- Responsive datatable examples -->
    <link href="{{ asset('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Инвесторы <a href="/{{ \Request::segment(1) }}/create" class="btn btn-success">+ Добавить</a></h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive mb-4">
                    <table class="table table-centered dt-responsive nowrap table-card-list"
                           style="border-collapse: collapse; border-spacing: 0 12px; width: 100%;" id="datatable">
                        <thead>
                        <tr class="bg-transparent">
                            <th>Названия</th>
                            <th>Фото</th>
                            <th style="width: 120px;">Действия</th>
                        </tr>
                        </thead>
                        <tbody class="tbody__info">
                        @php($i=0)
                        @foreach($data as $item)
                            <tr class="box__check">
                                <td>
                                    {{ $item->name_ru }}
                                </td>
                                <td>
                                    <img src="{{ $item->photo }}" style="width: 100px;" alt="">
                                </td>
                                <td style="display: flex;">
                                    <a href="/{{ \Request::segment(1) }}/{{ $item->id }}" target="_blank"
                                       class="btn btn-primary btn-sm" style="margin-right: 2px;"><i
                                                class="uil uil-eye font-size-18"></i></a>
                                    <a href="/{{ \Request::segment(1) }}/{{ $item->id }}/edit"
                                       class="btn btn-success btn-sm" style="margin-right: 2px;"><i
                                                class="uil uil-pen font-size-18"></i></a>
                                    <a type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#myModal{{ $item->id }}"><i
                                                class="uil uil-trash-alt font-size-18"></i></a>
                                </td>
                            </tr>
                            @php($i++)
                            <div id="myModal{{ $item->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Действительно хотитте удалить?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/{{ \Request::segment(1) }}/{{ $item->id }}" method="post">
                                                @csrf
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-danger">Удалить</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end table -->
            </div>
        </div>

    </div>
@endsection

@section('script')
    <!-- Required datatable js -->
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- init js -->
    <script src="/assets/js/pages/ecommerce-datatables.init.js"></script>
@endsection
