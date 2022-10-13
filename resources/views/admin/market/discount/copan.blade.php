@extends('admin.layouts.master')

@section('head-tag')
    <title>کوپن تخفیف</title>
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
            <a class="color-1" href="#"> تخفیف‌ها</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0 active" aria-current="page"> کوپن تخفیف</li>
    </ol>
</nav>
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="کوپن تخفیف" class="hr-text width-15-rem">

            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.discount.copan.create')}}" class="btn btn-flower btn-sm">ایجاد کوپن تخفیف</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جست‌وجو">
                </div>
            </section>
            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>کد کوپن</th>
                            <th>درصد تخفیف</th>
                            <th>سقف تخفیف</th>
                            <th>نوع کوپن</th>
                            <th>تاریخ شروع</th>
                            <th>تاریخ پایان</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>norooz</td>
                            <td>20%</td>
                            <td>35000 تومان</td>
                            <td>عمومی</td>
                            <td>20 اسفند 1401</td>
                            <td>5 فروردین 1402</td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="#" class="btn btn-flower btn-sm"><i class="fa fa-edit fa-sm"></i> ویرایش</a>
                                <button type="submit" class="btn btn-danger btn-sm ml-0"><i class="fa fa-trash-alt fa-sm"></i> حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>setsrt</td>
                            <td>10%</td>
                            <td>8000 تومان</td>
                            <td>خصوصی</td>
                            <td>3 تیر 1402</td>
                            <td>3 مرداد 1402</td>
                            <td class="width-16-rem text-center  ml-1">
                                <a href="#" class="btn btn-flower btn-sm"><i class="fa fa-edit fa-sm"></i> ویرایش</a>
                                <button type="submit" class="btn btn-danger btn-sm ml-0"><i class="fa fa-trash-alt fa-sm"></i> حذف</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>
@endsection
