@extends('admin.layouts.master')

@section('head-tag')
    <title>منو</title>
@endsection

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#">خانه</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0">
            <a class="color-1" href="#"> بخش محتوا</a>
        </li>
        <li class="breadcrumb-item font-size-11 p-0 active" aria-current="page"> منو</li>
    </ol>
</nav>
<section class="row">
    <section class="col-12">
        <section class="main-body-container">
            <section class="main-body-container-header">
                <hr data-content="منو" class="hr-text width-15-rem">
            </section>
            <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                <a href="{{ route('admin.content.menu.create')}}" class="btn btn-flower btn-sm">ایجاد منوی جدید</a>
                <div class="max-width-16-rem">
                    <input type="text" class="form-control form-control-sm form-text" placeholder="جست‌وجو">
                </div>
            </section>
            <section class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام منو</th>
                            <th>منوی والد</th>
                            <th>لینک منو</th>
                            <th class="max-width-16-rem text-center"><i class="fa fa-cogs"></i> تنظیمات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <th>دسته‌گل عروس</th>
                            <th>تشریفات عروسی</th>
                            <th>Https://www.www.com/category/دسته-گل-عروس</th>
                            <td class="width-16-rem text-center ml-1">
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