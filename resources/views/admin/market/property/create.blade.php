@extends('admin.layouts.master')

@section('head-tag')
<title>ایجاد فرم</title>
@endsection

@section('content')

  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="ایجاد فرم" class="hr-text width-15-rem">
            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.property.index') }}" class="btn btn-flower btn-sm">بازگشت</a>
            </section>

            <section>
                <form action="" method="">
                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">نام فرم</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>

                        <section class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="">فرم والد</label>
                                <select name="" id="" class="form-control form-control-sm">
                                    <option value="">تشریفات عروسی</option>
                                    <option value="">تشریفات عزاداری</option>
                                </select>
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
