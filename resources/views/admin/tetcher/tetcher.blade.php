@extends('layouts.master')
@section('css')
@section('title')
الرئسية
@stop
@endsection
@section('page-header')

@endsection
@section('content')

<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left icon-box bg-danger rounded-circle">
                        <span class="text-white">
                            <i class="fa fa-bar-chart-o highlight-icon" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="float-right text-right">
                        <p class="card-text text-dark">المقرارات </p>
                        <h4>5</h4>
                 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-left icon-box bg-primary rounded-circle">
                        <span class="text-white">
                            <i class="fa fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                        </span>
                    </div>
                    <div class="float-right text-right">
                        <p class="card-text text-dark">الطلاب </p>
                        <h4>5</h4>
                       
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