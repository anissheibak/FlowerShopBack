@extends('admin.layouts.master')

@section('head-tag')
<title>افزایش موجودی انبار</title>
@endsection

@section('content')

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="افزایش موجودی انبار" class="hr-text width-15-rem">
            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.storehouse.index') }}" class="btn btn-flower btn-sm">بازگشت</a>
            </section>

            <section>
                <form action="" method="">
                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام تحویل دهنده</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام تحویل گیرنده</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">تعداد</label>
                                <input type="number" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12">
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea name="" rows="4" class="form-control form-control-sm"></textarea>
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
