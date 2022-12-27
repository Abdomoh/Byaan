@extends('layouts.master-admin')
@section('css')

@section('title')
ادارة المنتجات
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
    <div class="col-xl-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                @include('message._message')
                <div class="d-sm-flex align-items-left justify--between mb-4">

                </div>



                @if($tetchers->count() > 0)
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="5" style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <td> الاسم </td>
                                <td> الاسم</td>
                                <td>المهنة </td>
                                <td>صورة  </td>
                               



                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tetchers as $index=>$tetcher)
                            <tr>
                                <td>{{ $index+1}}</td>
                                <td>{{ $tetcher->name }}</td>
                                <td>{{ $tetcher->email }}</td>
                                <td>{{$tetcher->type->type}}</td>
                            
                                <td><img src="/uploads/{{$tetcher->url}}" style=" width: 30px;" class="img-thumbnail" data-toggle="modal" data-target="#img_show{{ $tetcher->id }}"></td>
                              


                            </tr>
                            <!-- delete_modal_products -->
                            <div class="modal fade" id="delete{{ $tetcher->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                                حذف بيانات المنتج
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                هل تريد حذف بيانات المنتج ؟!
                                                <input id="id" type="hidden" name="id" class="form-control" value="{{ $tetcher->id }}">
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-secondary " data-dismiss="modal">اغلاق</button>
                                                    <button type="submit" class="btn btn-danger ">حذف
                                                        البيانات</button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  img- show -->
                            <div class="modal fade" id="img_show{{$tetcher->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">


                                            <center><img src="/uploads/{{$tetcher->url}}" width="400px" class="rounded-circle"></center>


                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- img show -->

                            @endforeach

                    </table>
                </div>
                @else
                <h1>لاتوجد بيانات</h1>
                @endif
            </div>
        </div>
    </div>

</div>
<!-- images show  -->
<div class="modal fade" id="imageShow10" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <img src="\landpage/img/Animal/ekrem-osmanoglu-JlBcuOAgzJs-unsplash 1.svg" width="100%">
    </div>
</div>
<div class="modal fade" id="imageShow20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <img src="\landpage/img/icons/camil.svg" width="100%">
    </div>
</div>

<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection