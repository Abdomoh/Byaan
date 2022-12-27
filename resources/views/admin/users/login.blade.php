@extends('layouts.nav')
@section('content')

<section id="contact" class="contact">
    <div class="container">
        <br><br>
        <div class="row justify-content-center" data-aos="fade-up">

            <div class="col-lg-10">
                @include('message._message')
                <div class="info-wrap">
                    <div class="row">
                        <div class="col-lg-12 info">
                            <i class="fa fa-user"></i>
                            <h4 class="text-center"> تسجيل دخول</h4>

                        </div>

                    </div>
                </div>

            </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">

            <div class="col-lg-10">
                <div class="info-wrap">
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="form-group mt-3">
                            <input type="email" class="form-control" name="email" id="subject" placeholder="email" required>
                        </div>

                        <div class="form-group mt-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                        </div>
                        <br>
                        <div class="text-center text-white"><button type="submit" name="submit" class="btn btn-warning btn-block text-white">تسجيل دخول</button></div>
                    </form>

                    <p class="text-center"> - او -</p>

                    <div class="text-center text-white"><a href="{{route('register')}}"><button type="submit" name="submit" class="btn btn-dark btn-block text-white"> انشاء حساب</button></a></div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Contact Section -->

@stop