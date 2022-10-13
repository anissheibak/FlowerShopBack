@extends('admin.layouts.master')

@section('head-tag')
    <title>نقش‌ها</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#">خانه</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#"> بخش کاربران</a>
        <li class="breadcrumb-item font-size-11 p-0 active" aria-current="page"> نقش‌ها</li>
    </ol>
</nav>
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="نقش‌ها" class="hr-text width-15-rem">

            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.user.role.create')}}" class="btn btn-flower btn-sm">ایجاد نقش‌ جدید</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جست‌وجو">
                </div>
            </section>
            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام نقش</th>
                            <th>دسترسی‌ها</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>پشتیبان فروش</td>
                            <td>
                                1-مشاهده‌ی سفارشات <br>
                                2-مشاهده‌ی پرداخت‌ها <br>
                                3-مشاهده‌ی تخفیف‌ها
                            </td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="#" class="btn btn-flower btn-sm"><i class="fa fa-edit fa-sm"></i> ویرایش</a>
                                <a href="#" class="btn btn-bg-green btn-sm"><i class="fa fa-user-graduate fa-sm"></i> دسترسی‌ها</a>
                                <button type="submit" class="btn btn-danger btn-sm ml-0"><i class="fa fa-trash-alt fa-sm"></i> حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>مدیر محتوا</td>
                            <td>
                                1-مشاهده‌ی پست‌ها <br>
                                2-مشاهده‌ی صفحه‌ها <br>
                                3-مشاهده‌ی نظرها
                            </td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="#" class="btn btn-flower btn-sm"><i class="fa fa-edit fa-sm"></i> ویرایش</a>
                                <a href="#" class="btn btn-bg-green btn-sm"><i class="fa fa-user-graduate fa-sm"></i> دسترسی‌ها</a>
                                <button type="submit" class="btn btn-danger btn-sm ml-0"><i class="fa fa-trash-alt fa-sm"></i> حذف</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>
@endsection
