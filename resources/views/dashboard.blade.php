@extends('layouts.master-admin')
@section('css')
@section('title')
الرئسية
@stop
@endsection
@section('page-header')

@endsection
@section('content')

<div class="row">
  <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
    <div class="card card-statistics h-100">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left icon-box bg-danger rounded-circle">
            <span class="text-white">
              <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
            </span>
          </div>
          <div class="float-right text-right">
            <p class="card-text text-dark">عدد الطلاب </p>
            <h4>{{$students}}</h4>
            <a href="{{url('all-students')}}" style="float:right ; color:blue;">عرض </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
    <div class="card card-statistics h-100">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left icon-box bg-primary rounded-circle">
            <span class="text-white">
              <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
            </span>
          </div>
          <div class="float-right text-right">
            <p class="card-text text-dark">عدد الاستاذة </p>
            <h4>{{$tetchers}}</h4>
            <a href="{{url('all-tetchers')}}" style="float:right ; color:blue;">عرض </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
    <div class="card card-statistics h-100">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left icon-box bg-warning rounded-circle">
            <span class="text-white">
              <i class="fa fa-users highlight-icon" aria-hidden="true"></i>
            </span>
          </div>
          <div class="float-right text-right">
            <p class="card-text text-dark">عدد المقراارت</p>
            <h4>{{$books}}</h4>
            <a href="{{url('all-book')}}" style="float:right ; color:blue;">عرض </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
    <div class="card card-statistics h-100">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left icon-box bg-info rounded-circle">
            <span class="text-white">
              <i class="fa fa-list highlight-icon" aria-hidden="true"></i>
            </span>
          </div>
          <div class="float-right text-right">
            <p class="card-text text-dark">عدد الدروس</p>
            <h4>{{$zooms}}</h4>
            <a href="{{url('zooms')}}" style="float:right ; color:blue;">عرض </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<div class="row">
  <div class="col-12 mb-30">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="row">
          <div class="col-xl-12">
            <div class="chart-wrapper" style="width: 100%; margin: 0 auto; ">

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection