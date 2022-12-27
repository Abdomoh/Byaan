@extends('layouts.master')
@section('css')
@section('title')
ادارة الكتب
@stop
@endsection
@section('page-header')
@endsection
@section('content')

<!-- row -->
<div class="row">
    <div class="col-sm-6">
        <h4 class="mb-0" style=" font-family: 'Cairo', sans-serif;">الكتب </h4>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
            <li class="breadcrumb-item"><a href="/dashboard" class="default-color">الرئسية</a></li>
            <li class="breadcrumb-item active"> الكتب</li>
        </ol>
    </div>
    @include('message._message')
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <h5 class="card-title">بيانات الكتاب </h5>
                <!-- add_form -->
                <form action="{{route('books.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="repeater-add">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">عنوان الكتاب </label>
                                <input type="text" name="title" class="form-control" id="inputEmail5" value="{{old('title')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">المؤلف</label>
                                <input type="text" name="other" class="form-control" id="inputEmail5" value="{{old('other')}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">الطبعة</label>
                                <input type="text" name="edition" class="form-control" id="inputEmail5" value="{{old('edition')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">عدد صفحات الكتاب</label>
                                <input type="number" name="page_number" class="form-control" id="inputEmail5" value="{{old('page_number')}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">صورة الغلاف</label>
                                <input type="file" name="url" class="form-control" id="inputEmail5" value="{{old('url')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">اضف الكتاب </label>
                                <input type="file" name="pdf" class="form-control" id="inputEmail5" value="{{old('pdf')}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group clearfix mb-20">
                                <button type="submit" class="btn btn-info x-small" value="Add shipping Address"> <i class="fa fa-plus"></i> اضافة</button>
                                <button type="reset" class="btn btn-warning x-small" value="Add shipping Address"><i class="fa fa-share"></i>مسح </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- row closed -->

<!-- image preview -->

<!--    image end -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection