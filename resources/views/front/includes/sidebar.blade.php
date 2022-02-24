<aside id="aside-main" class="aside-start aside-primary aside-hide-xs d-flex flex-column h-auto">


    <!--
        LOGO
        visibility : desktop only
    -->
    <div class="d-none d-sm-block">
        <div class="clearfix d-flex justify-content-between">

            <!-- Logo : height: 60px max -->
            <a class="w-100 align-self-center navbar-brand p-3" href="{{route('admin.home')}}" style="color: white">
             <!--   <img src="assets/images/logo/logo_light.svg" width="110" height="60" alt="..."> -->
            {{__('Admin Panel')}}


            </a>

        </div>
    </div>
    <!-- /LOGO -->


    <div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

        <!--

            All parent open navs are closed on click!
            To ignore this feature, add .js-ignore to .nav-deep

            Links height (paddings):
                .nav-deep-xs
                .nav-deep-sm
                .nav-deep-md  	(default, ununsed class)

            .nav-deep-hover 	hover background slightly different
            .nav-deep-bordered	bordered links


            ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
            IMPORTANT NOTE:
                Curently using ajax navigation!
                remove .js-ajax class to have regular links!
            ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        -->


        <div class="user-panel mt-3 pb-3 mb-3 d-flex text-center"  >
            <ul class="nav flex-column">
                <li class="nav-item" >

                    <div class="info">
                        <a href="#" class="d-block " style="color: white"> {{ucwords(Auth::guard('admin')->user()->name)}}</a>
                    </div>

                </li>
                <div class="login-box">
                    <form action="{{route('admin.admin.logout')}}" class="nav-link text-center" method="post" id="logout">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-secondary"><i class="fa fa-power-off"></i> <span>{{__('Sign Out')}}</span></button>
                    </form>
                </div>

            </ul>


        </div>
        <nav class="nav-deep nav-deep-dark nav-deep-hover pb-5">
            <ul class="nav flex-column">
                <li class="nav-item active">
                    <a class="nav-link js-ajax" href="{{route('admin.profile')}}">
                        <i class="fi fi-user-male"></i>
                        <b>{{__('Admin profile')}}</b>
                    </a>
                </li>
                 @if(Auth::guard('admin')->user()->power == 100)

                <li class="nav-item active">
                    <a class="nav-link js-ajax" href="{{route('admin.admin.index')}}">
                        <i class="fi fi-menu-dots"></i>
                        <b>{{__('Admins List')}}</b>
                    </a>
                </li>
              @endif


















            </ul>
        </nav>

    </div>
</aside>
