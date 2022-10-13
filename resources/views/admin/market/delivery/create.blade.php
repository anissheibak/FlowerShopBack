@extends('admin.layouts.master')

@section('head-tag')
<title>ایجاد روش ارسال</title>
@endsection

@section('content')

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-12 p-0">
            <a class="color-1" href="#">خانه</a>
        </li>
        <li class="breadcrumb-item font-size-12 p-0">
            <a class="color-1" href="#"> بخش فروش</a>
        </li>
        <li class="breadcrumb-item font-size-12 p-0">
            <a class="color-1" href="#"> روش‌های ارسال</a>
        </li>
        <li class="breadcrumb-item font-size-12 p-0 active" aria-current="page"> ایجاد روش‌های ارسال</li>
    </ol>
</nav>


  <section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <h5>
                  ایجاد روش ارسال
                </h5>
            </section>

            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.delivery.index') }}" class="btn btn-flower btn-sm">بازگشت</a>
            </section>

            <section>
                <form action="" method="">
                    <section class="row">

                        <section class="col-12 col-md-6">
                            <div class="form-group font-size-14">
                                <label for="">نام روش ارسال</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group  font-size-14">
                                <label for="">هزینه روش ارسال</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>
                        <section class="col-12 col-md-6">
                            <div class="form-group  font-size-14">
                                <label for="">زمان ارسال</label>
                                <input type="text" class="form-control form-control-sm">
                            </div>
                        </section>

                        <section class="col-12">
                            <button class="btn btn-flower-reverse btn-sm">ایجاد</button>
                        </section>
                    </section>
                </form>
            </section>

        </section>
    </section>
</section>

@endsection
