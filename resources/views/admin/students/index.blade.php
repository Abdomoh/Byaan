@extends('layouts.nav')

@section('content')
<!-- ======= Pricing Section ======= -->
<br><br><br><br>
<section id="pricing" class="pricing">
    <div class="container" data-aos="fade-up">
        <h3>المقررات الدراسية :</h3>
        <div class="row">
            @foreach($books as $book)
            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                <div class="box">
                    <h3>{{$book->title}}</h3>
                    @if($book->url==NULL)
                    <center> <img src="web/assets/img/slide/m1.jpeg" class="rounded" width="230px" alt="البروفايل"></center>
                    @else
                    <center> <img src="uploads/{{$book->url}}" class="rounded" width="230px" alt="البروفايل"></center>
                    @endif
                    <br>
                    <p style="text-align: right; font-weight:bold;"> المؤلف:{{$book->other}}</p>
                    <p style="text-align: right; font-weight:bold;">الطبعة :{{$book->edition}}</p>

                    <div class="btn-wrap">
                        <a href="/pdf/{{$book->pdf}}" download="" class="btn-buy">
                            <i class="bx bxl-download"></i>تحميل الكتاب </a>
                    </div>
                </div>
            </div>
            @endforeach
            <br><br>



            <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                <div class="card">
                    <div class="card-body">
                        @auth
                        @if(Auth::user()->url==NULL)
                        <center> <img src="web/assets\img\profile.svg" class="rounded-circle" width="200px" alt="البروفايل"></center>
                        @else
                        <center> <img src="uploads/{{Auth::user()->url}}" class="rounded-circle" width="200px" alt="البروفايل"></center>
                        @endif

                        <br>
                        <h5 class="text-center" style="font-weight:bold">{{Auth::user()->name}}</h5>
                        <h5 class="text-center" style="font-weight:bold">{{Auth::user()->email}}</h5>
                        <hr>
                        <h5 class="text-center"> الاستاذ المتابع :</h5>
                        <div class="text-center"><a href="{{$zooms->url ?? ''}}"> <button type="submit" class="btn btn-warning btn-block text-white" value="انشاء حساب "> <i class="fa fa-plus"></i> الانضمام الي غرفة ال zoom </button></a></div>
                        <div class="btn-wrap">


                            <a class="btn-buy" href="{{ url('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                تسجيل خروج
                            </a>

                            <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                        @endauth
                    </div>
                </div>
            </div>




        </div>


    </div>

</section><!-- End Pricing Section -->
<div>
    <center> {!! $books->links() !!}</center>
</div>

@stop