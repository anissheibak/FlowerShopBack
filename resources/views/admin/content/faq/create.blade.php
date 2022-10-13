@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد پرسش جدید</title>
@endsection

@section('content')

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <hr data-content="ایجاد پرسش" class="hr-text width-15-rem">
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.content.faq.index') }}" class="btn btn-flower btn-sm">بازگشت</a>
                </section>
                <section>
                    <form action="" method="">
                        <section class="row">

                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">پرسش</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">پاسخ</label>
                                    <textarea name="body" id="body"  class="form-control form-control-sm" rows="6"></textarea>
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

@section('script')
    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection
