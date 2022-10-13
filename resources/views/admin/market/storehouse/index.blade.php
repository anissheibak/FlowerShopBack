@extends('admin.layouts.master')

@section('head-tag')
    <title>انبار</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#">خانه</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#"> بخش فروش</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#">ویترین</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0 active" aria-current="page"> انبار</li>
    </ol>
</nav>
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content= "انبار" class="hr-text width-15-rem">

            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="" class="btn btn-flower btn-sm disabled">ایجاد انبار جدید</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جست‌وجو">
                </div>
            </section>
            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام کالا</th>
                            <th>تصویر کالا</th>
                            <th>موجودی</th>
                            <th>ورودی انبار</th>
                            <th>خروجی انبار</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>شاخه‌ی رز</td>
                            <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}"  alt="" class="image-width-2rem max-height-2rem"></td>
                            <th>50</th>
                            <th>200</th>
                            <th>150</th>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="{{ route('admin.market.storehouse.add-to-storehouse') }}" class="btn btn-flower btn-sm"><i class="fa fa-edit fa-sm"></i> افزایش موجودی</a>
                                <button type="submit" class="btn btn-bg-yellow btn-sm ml-0"><i class="fa fa-edit fa-sm"></i> اصلاح موجودی</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>
@endsection