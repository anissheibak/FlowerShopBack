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
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#"> نظرها</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0 active" aria-current="page"> نمایش نظرها</li>
    </ol>
</nav>
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="دسته‌بندی" class="hr-text width-15-rem">

            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.comment.index')}}" class="btn btn-flower btn-sm">بازگشت</a>
            </section>
            <section class="card mb-3">
                <section class="card-header btn-flower-reverse font-size-14">انیس شیبک - 9070480</section>
                <section class="card-body">
                    <h6 class="card-title font-size-14">گلسرا: <span class="color-flower">رز مریم</span> - مشخصات سفارش: <span class="color-flower">دسته‌گل عروس با رز سفید</span> - کد کالا: <span class="color-flower">8974120</span></h6> <hr>
                    <p class="card-text font-size-17">
                        دسته‌گل بسیار زیبا بود فقط هزینه‌ش زیاد شد.
                    </p>
                </section>
            </section>

            <section>
                <form action="" method="">
                    <section class="row">

                        <section class="col-12 font-size-12">
                            <div class="form-group">
                                <label for="">پاسخ ادمین: </label>
                                <textarea class="form-control form-control-sm" rows="4"></textarea>
                            </div>
                        </section>
                        <section class="col-12">
                            <button class="btn btn-flower-reverse btn-sm">ثبت</button>
                        </section>
                    </section>
                </form>
            </section>
    </section>
@endsection
