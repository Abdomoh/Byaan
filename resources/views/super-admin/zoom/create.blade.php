@extends('layouts.master')
@section('css')
@section('title')
ادارة ال Zoom
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
            <li class="breadcrumb-item active"> Zoom</li>
        </ol>
    </div>
    @include('message._message')
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <h5 class="card-title">بيانات Zoom </h5>
                <!-- add_form -->
                <form action="{{route('zoom.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="repeater-add">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">عنوان الدرس </label>
                                <input type="text" name="title" class="form-control" id="inputEmail5" value="{{old('title')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">رابط الدرس علي ال Zoom</label>
                                <input type="text" name="url" class="form-control" id="inputEmail5" value="{{old('url')}}">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">تاريخ  بداية الدرس </label>
                                <input type="date" name="date" class="form-control" id="inputEmail5" value="{{old('date')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail5">مدة الدرسة </label>
                                <input type="text" name="time" class="form-control" id="inputEmail5" value="{{old('time')}}">
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