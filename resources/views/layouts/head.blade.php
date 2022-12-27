<!-- Title -->
<title>@yield("title")</title>


<!-- Favicon -->
<link rel="shortcut icon" href="/uploads/product_images/" type="image/x-icon" />


<!-- Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;700&family=Tajawal&display=swap">


@yield('css')
<!--- Style css -->
<link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

<!--- Style css -->
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/flatly/bootstrap.min.css">
    <link href="{{ URL::asset('assets/css/bootstrap-datetimepicker.css?v2')}}" rel="stylesheet" />

    



<!--- Style css -->
@if (App::getLocale() == 'ar')
    <link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet">
@else
    <link href="{{ URL::asset('assets/css/ltr.css') }}" rel="stylesheet">
@endif

<!--<link href="{{ URL::asset('assets/css/rtl.css') }}" rel="stylesheet"> -->