@extends('layouts.app')

@section('content')

    <div class="container-fluid py-4">
        <div aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Expenses</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Expenses</h6>
            <br>
        </div>

        <div class="col-auto  ml-auto">
            <a class="btn bg-gradient-primary mt-3 " href="#" data-toggle="modal" data-target="#add_transaction">
                <i class="fa fa-plus"></i> Add Expenses
            </a>
        </div>
    </div>



    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Expenses</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Spendings</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($spendings as $spending)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="row__column row__column--compact row__column--middle mr-2">
                                                    <div style="width: 18px; height: 18px; border-radius: 3px; margin: 7px; background: #{{ $spending->tag->color }};"></div>
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"> {{ $spending->tag->name }}</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">{{ $spending->amount }}</p>
                                        </td>
                                        <td class="align-center">
                                            <a class="btn btn-outline-warning btn-rounded" href="#" data-toggle="modal"
                                               data-id="{{ $spending->id }}"
                                               data-target="#edit_tag{{ $spending->id }}"
                                               onclick="checkCheckbox({{ $spending->id }})"><i
                                                    class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-outline-danger btn-rounded" href="#" data-toggle="modal"
                                               data-tag-id="{{ $spending->id }}" data-id="{{ $spending->id }}"
                                               data-target="#delete_tag"><i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="#" class="font-weight-bold" target="_blank">Nour</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="#" class="nav-link text-muted" target="_blank">Nour</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>



@endsection
