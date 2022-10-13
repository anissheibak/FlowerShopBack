@extends('admin.layouts.master')

@section('head-tag')
    <title>نمایش تیکت‌ها</title>
@endsection

@section('content')

<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="نمایش تیکت‌ها" class="hr-text width-15-rem">

            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.ticket.index')}}" class="btn btn-flower btn-sm">بازگشت</a>
            </section>
            <section class="card mb-3">
                <section class="card-header btn-flower-reverse font-size-14">انیس شیبک - 13730480</section>
                <section class="card-body">
                    موضوع تیکت: <span class="color-flower">مشکل در پرداخت</span></h6> <hr>
                    <p class="card-text font-size-17">
                        سلام. من تمام مراحل ثبت سفارش رو میرم اما قسمت پرداخت نهایی ارور میده. چه کاری باید انجام بدم؟
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
