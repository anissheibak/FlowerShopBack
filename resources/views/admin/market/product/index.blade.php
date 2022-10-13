@extends('admin.layouts.master')

@section('head-tag')
    <title>محصولات</title>
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
        <li class="breadcrumb-item font-size-11 p-0 active" aria-current="page"> محصولات</li>
    </ol>
</nav>
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="محصولات" class="hr-text width-15-rem">

            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.market.product.create')}}" class="btn btn-flower btn-sm">ایجاد محصول جدید</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جست‌وجو">
                </div>
            </section>
            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام محصول</th>
                            <th>تصویر محصول</th>
                            <th>قیمت</th>
                            <th>تعداد</th>
                            <th>‌دسته‌بندی </th>
                            <th>فرم</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>دسته گل رز قرمز</td>
                            <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}"  alt="" class="max-height-2rem"></td>
                            <td>570,000 تومان</td>
                            <td>18 شاخه رز قرمز</td>
                            <td>دسته‌گل</td>
                            <td>اندازه نمایشگر</td>
                            <td class="width-8-rem text-center  ml-1">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-flower btn-sm btn-block dorpdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-tools"></i> عملیات
                                    </a>
                                    <div class="menu-design dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="#" class="dropdown-item text-right"><i class="fa fa-images"></i> گالری</a>
                                        <a href="#" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> فرم کالا</a>
                                        <a href="#" class="dropdown-item text-right"><i class="fa fa-edit"></i> ویرایش</a>
                                        <form action="" method="POST">
                                            <button type="submit" class="dropdown-item text-right"><i class="fa fa-window-close"></i> حذف</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>دسته گل رز سفید</td>
                            <td><img src="{{ asset('admin-assets/images/avatar-2.jpg') }}"  alt="" class="max-height-2rem"></td>
                            <td>570,000 تومان</td>
                            <td>18 شاخه رز سفید</td>
                            <td>دسته‌گل</td>
                            <td>اندازه نمایشگر</td>
                            <td class="width-8-rem text-center  ml-1">
                                <div class="dropdown">
                                    <a href="#" class="btn btn-flower btn-sm btn-block dorpdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-tools"></i> عملیات
                                    </a>
                                    <div class="menu-design dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a href="#" class="dropdown-item text-right"><i class="fa fa-images"></i> گالری</a>
                                        <a href="#" class="dropdown-item text-right"><i class="fa fa-list-ul"></i> فرم کالا</a>
                                        <a href="#" class="dropdown-item text-right"><i class="fa fa-edit"></i> ویرایش</a>
                                        <form action="" method="POST">
                                            <button type="submit" class="dropdown-item text-right"><i class="fa fa-window-close"></i> حذف</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
    </section>
@endsection
