@extends('admin.layouts.app')

@section('title', 'APC')

@section('content')
    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb mb-1">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Brand</li>
            </ol>
            <h1>Brand</h1>
        </nav>
    </div>

    <section class="section dashboard">
        <div class="px-3 bg-white">
            <table class="table table-hover px-5">
                <thead>
                <tr>
                    <th class="thead"><input type="checkbox"></th>
                    <th class="thead">Thương hiệu</th>
                    <th class="thead">Số sản phẩm</th>
                    <th class="thead">Danh mục</th>
                    <th class="thead">Tổng số sản phẩm</th>
                    <th class="thead text-center">Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="align-middle"><input type="checkbox" name="" id=""></td>
                    <td class="align-middle">Asus</td>
                    <td class="align-middle">130</td>
                    <td class="align-middle">
                        <span href="#" class="badge badge-light">Mainboard</span>
                        <span href="#" class="badge badge-light">Vga</span>
                        <span href="#" class="badge badge-light">Màn Hình</span>
                    </td>
                    <td class="col-2 align-middle ">50</td>
                    <td class="col-1 align-middle text-center">
                        <button class="btn-transparent btn-svg-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" class="lucide lucide-ellipsis-vertical">
                                <circle cx="12" cy="12" r="1"/>
                                <circle cx="12" cy="5" r="1"/>
                                <circle cx="12" cy="19" r="1"/>
                            </svg>
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
