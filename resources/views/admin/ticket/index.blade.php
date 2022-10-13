@extends('admin.layouts.master')

@section('head-tag')
    <title>تیکت‌ها</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#">خانه</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#"> بخش تیکت‌ها</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0 active" aria-current="page"> تیکت‌ها</li>
    </ol>
</nav>
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="تیکت‌ها" class="hr-text width-15-rem">

            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <input href="" class="btn btn-flower btn-sm" placeholder="ایجاد تیکت جدید" disabled>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جست‌وجو">
                </div>
            </section>
            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نویسنده‌ی تیکت</th>
                            <th>عنوان تیکت</th>
                            <th>دسته‌ی تیکت</th>
                            <th>اولویت تیکت</th>
                            <th>ارجاع شده از</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>انیس شیبک</td>
                            <td>مشکل در پرداخت</td>
                            <td>فروش</td>
                            <td>فوری</td>
                            <td>-</td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="{{ route('admin.ticket.show') }}" class="btn btn-flower btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> نمایش</a>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>انیس شیبک</td>
                            <td>مشکل در پرداخت</td>
                            <td>فروش</td>
                            <td>فوری</td>
                            <td>فاطمه شهابی</td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="{{ route('admin.ticket.show') }}" class="btn btn-flower btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> نمایش</a>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>فاطمه شهابی</td>
                            <td>مشکل در پرداخت</td>
                            <td>فروش</td>
                            <td>بحرانی</td>
                            <td>انیس شیبک</td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="{{ route('admin.ticket.show') }}" class="btn btn-flower btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> نمایش</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>
@endsection
