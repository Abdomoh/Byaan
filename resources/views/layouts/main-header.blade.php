<!--=================================
 header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    @auth

    <div class="text-left navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="{{url('/dashboard')}}"><img src="/uploads/product_images/" alt=""></a>
        <a class="navbar-brand brand-logo-mini" href="{{url('/dashboard')}}"><img src="/uploads/product_images/" alt=""></a>
    </div>

    @endauth


    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
            <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>
        <li class="nav-item">
            <div class="search">
                <a class="search-btn not_click" href="javascript:void(0);"></a>
                <div class="search-box not-click">
                    <input type="text" class="not-click form-control" placeholder="Search" value="" name="search">
                    <button class="search-button" type="submit"> <i class="fa fa-search not-click"></i></button>
                </div>
            </div>
        </li>
    </ul>


    <!-- top bar right -->



    <ul class="nav navbar-nav ml-auto">




        <li class="nav-item fullscreen">
            <a id="btnFullscreen" href="#" class="nav-link"><i class="ti-fullscreen"></i></a>
        </li>

        <li class="nav-item dropdown ">
            <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true"> <i class=" ti-view-grid"></i> </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-big">
                <div class="dropdown-header">
                    <strong>روابط سريعة</strong>
                </div>
                <div class="dropdown-divider"></div>

                <div class="nav-grid">
                    <a href="" class="nav-grid-item"><i class="fa fa-calendar text-warning"></i>
                        <h5 style="font-family: 'Cairo', sans-serif;
                                font-size: 16px;"> الكتب </h5>
                    </a>
                    <a href="" class="nav-grid-item"><i class="fa fa-calendar text-danger "></i>
                        <h5 style="font-family: 'Cairo', sans-serif;
                                font-size: 16px;"> </h5>الكتب
                    </a>
                </div>
            </div>
        </li>

        <li class="nav-item dropdown mr-30">
            @auth
            
            @if(Auth::user()->url==NULL)
           
      
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="../web/assets\img\profile.svg " alt="avatar">
            </a>
            @else
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="/uploads/{{Auth::user()->url}}" alt="avatar">
            </a>
            @endif
            @endauth


            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">
                    <div class="media">
                        <div class="media-body">
                            <h3 class="mt-0 mb-0">@auth{{Auth::user()->name}} </h3>
                            <span style="font-weight:bold;">{{Auth::user()->email}} @endauth</span>
                        </div>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#"><i class="text-warning ti-user"></i>البروفايل</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="{{ url('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    تسجيل خروج
                </a>

                <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>

    </ul>
</nav>

<!--=================================
 header End-->