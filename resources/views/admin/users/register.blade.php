@extends('layouts.nav')
@toastr_css
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
                            <h4 class="text-center"> انشاء حساب جديد</h4>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <form method="POST" action="{{route('register.store')}}" enctype="multipart/form-data">
                    @csrf

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="  الاسم" required><br>

                                <select name="type_id" class="form-control">
                                    <option value="" selected disabled>اختر طالب او استاذ</option>
                                    @foreach($types as $type)
                                    <option value="{{$type->id}}" {{old('type_id')==$type->id ? 'selected' : ''}}>{{$type->type}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder=" الايميل" value="{{old('email')}}" required><br>
                                <input type="password" class="form-control" name="password" id="password" placeholder="كلمة المرور" required>

                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md- form-group mt-3 mt-md-0">
                                
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder=" تأكيد كلمة المرور" required><br>
                                <label for=""  >صورة الملف الشخصي ( اختياري)</label>
                                <input type="file" class="form-control" name="url" id="password" placeholder="الصورة">

                            </div>
                        </div>

                        <br>
                        <div class="text-center"> <button type="submit" class="btn btn-warning btn-block text-white" value="انشاء حساب "> <i class="fa fa-plus"></i> انشاء حساب </button></div>
                </form>
            </div>
        </div>

    </div>

    </div>
</section><!-- End Contact Section -->
@toastr_js
@toastr_render
@stop