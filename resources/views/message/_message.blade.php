<html dir="lrt">
@if (Session()->has('success'))

<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
        </div>
    </div>
</div>
@endif

@if (Session()->has('login'))

<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-success" role="alert">
        {{Session::get('login')}}
        </div>
    </div>
</div>
@endif



@if(Session::has('error'))
<script type="text/javascript">
   toastr.options = {
      "closeButton": true,
      "progressBar": true
   }
   toastr.error("{{ session('error') }}");
</script>
@endif




@if (session()->has('success'))

<script type="text/javascript">
   window.onload = function() {
      notif({
         msg: " تم الادخال بنجاح ",
         type: "success",
         time: "5"
      })
   }
</script>
@endif


@if(session()->has('info'))
<script type="text/javascript">
   window.onload = function() {
      notif({
         msg: " تم التعديل بنجاح ",
         type: "info",
         time: "5"
      })
   }
</script>
@endif

@if (count($errors) > 0)
<div class="row">
   <div class="col-sm-12">
      <div class="alert alert-danger" role="alert">
         <strong>رسالة خطا </strong>
         <ul>

            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
         </ul>
      </div>
   </div>
</div>
@endif

</html>