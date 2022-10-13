@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد اطلاعیه‌ی پیامکی</title>
@endsection

@section('content')

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <hr data-content="ایجاد اطلاعیه‌ی پیامکی" class="hr-text width-16-rem">
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.notify.sms.index') }}" class="btn btn-flower btn-sm">بازگشت</a>
                </section>
                <section>
                    <form action="" method="">
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">عنوان پیامک</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تاریخ انتشار</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>

                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">متن پیامک</label>
                                    <textarea name="" id=""  class="form-control form-control-sm" rows="6"></textarea>
                                </div>
                            </section>

                            <section class="col-12">
                                <button class="btn btn-flower-reverse btn-sm">ثبت</button>
                            </section>
                        </section>
                    </form>
                </section>
            </section>
        </section>
    </section>
@endsection
