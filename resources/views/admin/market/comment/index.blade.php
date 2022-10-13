@extends('admin.layouts.master')

@section('head-tag')
    <title>نظرها</title>
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
            <a class="color-1" href="#"> ویترین</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0 active" aria-current="page"> نظرها</li>
    </ol>
</nav>
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="نظرها" class="hr-text width-15-rem">

            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <input href="" class="btn btn-flower btn-sm" placeholder="ایجاد نظر جدید" disabled>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جست‌وجو">
                </div>
            </section>
            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نویسنده‌ی نظر</th>
                            <th>کد کاربر</th>
                            <th>کد کالا</th>
                            <th>کالا</th>
                            <th>نام گلسرا</th>
                            <th>وضعیت</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>3487645</td>
                            <td>انیس شیبک</td>
                            <td>7654982</td>
                            <td>گل رز سفید</td>
                            <td>رز سفید</td>
                            <td>در انتظار تایید</td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="{{ route('admin.market.comment.show') }}" class="btn btn-flower btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> نمایش</a>
                                <button type="submit" class="btn btn-bg-green btn-sm ml-0"><i class="fa fa-check" aria-hidden="true"></i> تایید</button>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>3487645</td>
                            <td>انیس شیبک</td>
                            <td>7654982</td>
                            <td>گل رز سفید</td>
                            <td>رز سفید</td>
                            <td>تایید شده</td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="{{ route('admin.market.comment.show') }}" class="btn btn-flower btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> نمایش</a>
                                <button type="submit" class="btn btn-bg-yellow btn-sm ml-0"><i class="fa fa-clock" aria-hidden="true"></i> عدم تایید</button>
                            </td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>3487645</td>
                            <td>انیس شیبک</td>
                            <td>7654982</td>
                            <td>گل رز سفید</td>
                            <td>رز سفید</td>
                            <td>در انتظار تایید</td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="{{ route('admin.market.comment.show')}}" class="btn btn-flower btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> نمایش</a>
                                <button type="submit" class="btn btn-bg-green btn-sm ml-0"><i class="fa fa-check" aria-hidden="true"></i> تایید</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>
@endsection
