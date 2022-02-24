<header id="header" class="shadow-xs">

    <!-- NAVBAR -->
    <div class="container position-relative">


        <!--

            [SOW] SEARCH SUGGEST PLUGIN
            ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++
            PLEASE READ DOCUMENTATION
            documentation/plugins-sow-search-suggest.html
            ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++

        -->
        <form 	action="#"
                 method="GET"
                 data-autosuggest="on"

                 data-mode="json"
                 data-json-max-results='10'
                 data-json-related-title='Explore Smarty'
                 data-json-related-item-icon='fi fi-star-empty'
                 data-json-suggest-title='Suggestions for you'
                 data-json-suggest-noresult='No results for'
                 data-json-suggest-item-icon='fi fi-search'
                 data-json-suggest-min-score='5'
                 data-json-highlight-term='true'
                 data-contentType='application/json; charset=utf-8'
                 data-dataType='json'

                 data-container="#sow-search-container"
                 data-input-min-length="2"
                 data-input-delay="250"
                 data-related-keywords=""
                 data-related-url="_ajax/search_suggest_related.json"
                 data-suggest-url="_ajax/search_suggest_input.json"
                 data-related-action="related_get"
                 data-suggest-action="suggest_get"
                 class="js-ajax-search sow-search sow-search-over hide d-inline-flex">
            <div class="sow-search-input w-100">

                <div class="input-group-over d-flex align-items-center w-100 h-100 rounded shadow-md">

                    <input placeholder="what are you looking today?" aria-label="what are you looking today?" name="s" type="text" class="form-control-sow-search form-control form-control-lg shadow-xs" value="" autocomplete="off">

                    <span class="sow-search-buttons">

									<!-- search button -->
									<button aria-label="Global Search" type="submit" class="btn bg-transparent shadow-none m-0 px-2 py-1 text-muted">
										<i class="fi fi-search fs--20"></i>
									</button>

                        <!-- close : mobile only (d-inline-block d-lg-none) -->
									<a href="javascript:;" class="btn-sow-search-toggler btn btn-light shadow-none m-0 px-2 py-1 d-inline-block d-lg-none">
										<i class="fi fi-close fs--20"></i>
									</a>

								</span>

                </div>

            </div>

            <!-- search suggestion container -->
            <div class="sow-search-container w-100 p-0 hide shadow-md" id="sow-search-container">
                <div class="sow-search-container-wrapper">

                    <!-- main search container -->
                    <div class="sow-search-loader p-3 text-center hide">
                        <i class="fi fi-circle-spin fi-spin text-muted fs--30"></i>
                    </div>

                    <!--
                        AJAX CONTENT CONTAINER
                        SHOULD ALWAYS BE AS IT IS : NO COMMENTS OR EVEN SPACES!
                    --><div class="sow-search-content rounded w-100 scrollable-vertical"></div>

                </div>
            </div>
            <!-- /search suggestion container -->

            <!--

                overlay combinations:
                    overlay-dark opacity-* [1-9]
                    overlay-light opacity-* [1-9]

            -->
            <div class="sow-search-backdrop overlay-dark opacity-3 hide"></div>

        </form>
        <!-- /SEARCH -->





        <nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

            <div class="align-items-start">

                <!-- mobile menu button : show -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg width="25" viewBox="0 0 20 20">
                        <path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z"></path>
                        <path d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z"></path>
                        <path d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z"></path>
                        <path d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z"></path>
                    </svg>
                </button>

                <!--
                    Logo : height: 70px max
                -->



                <a target="_blank" href="{{route('home')}}" class="btn btn-block shadow-none text-white m-0" style="color: #7e8299!important">
                   <h1>   {{__('Resturant')}}  </h1>
                </a>



            </div>





            <!-- Menu -->
            <!--

                Dropdown Classes (should be added to primary .dropdown-menu only, dropdown childs are also affected)
                    .dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
                    .dropdown-menu-hover 		- open on hover
                    .dropdown-menu-clean 		- no background color on hover
                    .dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
                    .dropdown-menu-uppercase 	- uppercase text (font-size is scalled down to 13px)
                    .dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

                    Repositioning long dropdown childs (Example: Pages->Account)
                        .dropdown-menu-up-n100 		- open up with top: -100px
                        .dropdown-menu-up-n100 		- open up with top: -150px
                        .dropdown-menu-up-n180 		- open up with top: -180px
                        .dropdown-menu-up-n220 		- open up with top: -220px
                        .dropdown-menu-up-n250 		- open up with top: -250px
                        .dropdown-menu-up 			- open up without negative class


                    Dropdown prefix icon (optional, if enabled in variables.scss)
                        .prefix-link-icon .prefix-icon-dot 		- link prefix
                        .prefix-link-icon .prefix-icon-line 	- link prefix
                        .prefix-link-icon .prefix-icon-ico 		- link prefix
                        .prefix-link-icon .prefix-icon-arrow 	- link prefix

                    .nav-link.nav-link-caret-hide 	- no dropdown icon indicator on main link
                    .nav-item.dropdown-mega 		- required ONLY on fullwidth mega menu

                    Mobile animation - add to .navbar-collapse:
                    .navbar-animate-fadein
                    .navbar-animate-fadeinup
                    .navbar-animate-bouncein

            -->






            <div class="collapse navbar-collapse " >




            </div>





            <!-- OPTIONS -->


            <div>

                <a href="{{route('tables')}}" title="{{__('tables')}}" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore">

                    <i class="fi fi-product-tag " >   </i>
                    {{__('Tables')}}

                </a>

            </div>

            <div>

                <a href="{{route('orders')}}" title="{{__('Orders')}}" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore">

                    <i class="fi fi-circle-spin " >   </i>
                    {{__('Orders')}}

                </a>

            </div>


            <ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

                <li class="list-inline-item mx-1 dropdown">

                    <a href="#" aria-label="Account Options" title="{{__('Profile')}}" id="dropdownAccountOptions" class="btn btn-sm rounded-circle btn-light bg-transparent text-muted shadow-none" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
									<span class="group-icon">
										<i class="fi fi-user-male"></i>
										<i class="fi fi-close"></i>
									</span>
                    </a>


                    <!--

                        Dropdown Classes
                            .dropdown-menu-dark 		- dark dropdown (desktop only, will be white on mobile)
                            .dropdown-menu-hover 		- open on hover
                            .dropdown-menu-clean 		- no background color on hover
                            .dropdown-menu-invert 		- open dropdown in oposite direction (left|right, according to RTL|LTR)
                            .dropdown-click-ignore 		- keep dropdown open on inside click (useful on forms inside dropdown)

                            Dropdown prefix icon (optional, if enabled in variables.scss)
                                .prefix-link-icon .prefix-icon-dot 		- link prefix
                                .prefix-link-icon .prefix-icon-line 	- link prefix
                                .prefix-link-icon .prefix-icon-ico 		- link prefix
                                .prefix-link-icon .prefix-icon-arrow 	- link prefix

                                .prefix-icon-ignore 					- ignore, do not use on a specific link

                    -->



                    <div aria-labelledby="dropdownAccountOptions" class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-clean dropdown-menu-invert dropdown-click-ignore p-0 mt--18 fs--15">
                        <div class="dropdown-header">

                            {{ \Illuminate\Support\Facades\Auth::user()->name}}
                        </div>
                       <!-- <div class="dropdown-divider"></div>
                        <a href="account-orders.html" title="My Orders" class="dropdown-item text-truncate font-weight-light">
                            My Orders <small>(2)</small>
                        </a>
                        <a href="account-favourites.html" title="My Favourites" class="dropdown-item text-truncate font-weight-light">
                            My Favourites <small>(3)</small>
                        </a>
                        <a href="account-settings.html" title="Account Settings" class="dropdown-item text-truncate font-weight-light">
                            Account Settings
                        </a> -->
                        <div class="dropdown-divider mb-0"></div>



                        <a href="{{route('profile')}}" title="Log Out" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore">
                            <i class="fi fi-user-male"></i>
                            {{__('Profile')}}
                        </a>


                        <a href="{{route('logout')}}" title="Log Out" class="prefix-icon-ignore dropdown-footer dropdown-custom-ignore">
                            <i class="fi fi-power float-start"></i>
                            {{__('Log Out')}}
                        </a>


                    </div>




                </li>

             <!--   <li class="list-inline-item mx-1 dropdown">

                    <a href="#" aria-label="website search" class="btn-sow-search-toggler btn btn-sm rounded-circle btn-light bg-transparent text-muted shadow-none">
                        <i class="fi fi-search"></i>
                    </a>

                </li>

           -->

            </ul>
            <!-- /OPTIONS -->





            <div class="d-inline-block float-start">
                <ul class="list-inline m-0">

                    <!-- LANGUAGE -->
                    <li class="dropdown list-inline-item m-0">

                        <a id="topDDLanguage" href="#!" class="py-2 d-inline-block" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true">



                            @if(app()->getLocale() == 'ar')
                                <img src="{{asset('images/flag/ku.jpg')}}"  style="width: 16px;height: 11px">


                            <span class="text-muted pl-2 pr-2">

                                عربي

                            </span>

                            @else

                                <img src="{{asset('images/flag/us.png')}}"  style="width: 16px;height: 11px">
                                <span class="text-muted pl-2 pr-2">

                                ENGLISH

                            </span>

                                @endif
                        </a>

                        <div aria-labelledby="topDDLanguage" class="dropdown-menu dropdown-menu-hover text-uppercase fs--13 px-1 pt-1 pb-0 m-0 max-h-50vh scrollable-vertical">
                            <a href="{{ route('locale', 'en') }}" class="active dropdown-item text-muted text-truncate line-height-1 rounded p--12 mb-1">
                                <img src="{{asset('images/flag/us.png')}}"  style="width: 16px;height: 11px">
                                ENGLISH
                            </a>
                            <a href="{{ route('locale', 'ar') }}" class="dropdown-item text-muted text-truncate line-height-1 rounded p--12 mb-1">
                                <img src="{{asset('images/flag/ku.jpg')}}"  style="width: 16px;height: 11px">
                                عربي
                            </a>

                        </div>

                    </li>
                    <!-- /LANGUAGE -->




                </ul>
            </div>





        </nav>

    </div>
    <!-- /NAVBAR -->

</header>
