@extends('layouts.master')
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

                <a href="{{url('/books/create')}}"><button type="button" class="btn btn-outline-info x-small"> <i class=" fa fa-plus"></i>اضافة كتاب جديد</button></a>

                <br><br>

                @if($books->count() > 0)
                <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="5" style="text-align: center">
                        <thead>
                            <tr>
                                <th>#</th>
                                <td> عنوان الكتاب</td>
                                <td> المؤلف</td>
                                <td>الطبعة </td>
                                <td>عدد الصفحات </td>
                                <td>صورة الغلاف </td>
                                <td> تحميل الكتاب </td>

                                <td> التحكم </td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $index=>$book)
                            <tr>
                                <td>{{ $index+1}}</td>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->other }}</td>
                                <td>{{$book->edition}}</td>
                                <td>{{$book->page_number}}</td>
                                <td><img src="/uploads/{{$book->url}}" style=" width: 30px;" class="img-thumbnail" data-toggle="modal" data-target="#img_show{{ $book->id }}"></td>
                                <td><a href="/uploads/{{$book->pdf}}" download=""><i class="fa fa-download"></a></td>


                                <td>

                                    <a href="#"> <button type="button" class="btn btn-outline-info x-small" title="">
                                            <i class="fa fa-edit"></i> </button></a>

                                    <button type="button" class="btn btn btn-outline-danger x-small" data-toggle="modal" data-target="#delete{{ $book->id }}" title="">
                                        <i class="fa fa-trash"></i> </button>

                                </td>
                            </tr>
                            <!-- delete_modal_products -->
                            <div class="modal fade" id="delete{{ $book->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <form action="{{route('books.destroy',$book->id)}}" method="post">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                هل تريد حذف بيانات المنتج ؟!
                                                <input id="id" type="hidden" name="id" class="form-control" value="{{ $book->id }}">
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
                            <div class="modal fade" id="img_show{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">


                                            <center><img src="/uploads/{{$book->url}}" width="400px" class="rounded-circle"></center>


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