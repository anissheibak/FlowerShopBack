@extends('admin.layouts.master')

@section('head-tag')
    <title>افزودن محصول</title>
@endsection

@section('content')

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        افزودن محصول
                    </h5>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.market.product.index') }}" class="btn btn-flower btn-sm">بازگشت</a>
                </section>
                <section>
                    <form action="" method="">
                        <section class="row">

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">نام محصول</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>

                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">دسته محصول</label>
                                    <select name="" id="" class="form-control form-control-sm">
                                        <option value="">دسته را انتخاب کنید</option>
                                        <option value="">دسته گل</option>
                                        <option value="">گل طبیعی شاخه‌ای</option>
                                        <option value="">گل مصنوعی</option>
                                    </select>
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">فرم محصول</label>
                                    <select name="" id="" class="form-control form-control-sm">
                                        <option value="">دسته را انتخاب کنید</option>
                                        <option value="">دسته گل</option>
                                        <option value="">گل طبیعی شاخه‌ای</option>
                                        <option value="">گل مصنوعی</option>
                                    </select>
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تصویر </label>
                                    <input type="file" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">تعداد</label>
                                    <input type="number" min="1" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="">قیمت محصول</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">توضیحات</label>
                                    <textarea name="body" id="body"  class="form-control form-control-sm" rows="6"></textarea>
                                </div>
                            </section>

                            <section class="col-12 border-top border-bottom py-3 mb-3">

                                <section class="row">

                                    <section class="col-6 col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="ویژگی ...">
                                        </div>
                                    </section>

                                    <section class="col-6 col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-sm" placeholder="مقدار ...">
                                        </div>
                                    </section>

                                </section>

                                <section>
                                    <button type="button" class="btn btn-bg-green btn-sm">افزودن</button>
                                </section>


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
