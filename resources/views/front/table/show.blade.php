@extends('layouts.app')
@section('title', ' | '. __('Table'). $table->code)
@section('content')

    <!-- PRODUCT -->
    <section class="pt-5">
        <div class="container">

            <!-- Breadcrumbs -->
            <div class="mb-5">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb fs--14">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="{{route('tables')}}">{{__('Tables')}}</a></li>
                    </ol>
                </nav>

                <div class="fs--14 text-muted mt-1">
                    {{__('Last updated on')}} <time >{{$table->created_at}}</time>
                </div>
            </div>
            <!-- /Breadcrumbs -->


            <div class="row">

                <div class="col-lg-7 col-md-6 order-1 mb-5">

                    <!--

                        SWIPER SLIDER
                        w-75 w-100-xs 		= 70% width on desktop, 100% mobile
                        swiper-white 		= white buttons. (swiper-primary, swiper-danger, etc)

                        By default, Smarty controller will reconfigure swiper if -only- one image detected:
                            - remove arrows
                            - remove progress/bullets
                            - disable loop
                        Add .js-ignore class to skip, if for some reason is needed!

                    -->
                    <div class="swiper-container swiper-preloader swiper-white mx-auto"
                         data-swiper='{
									"slidesPerView": 1,
									"spaceBetween": 0,
									"autoplay": false,
									"loop": true,
									"zoom": true,
									"effect": "slide",
									"pagination": { "type": "progressbar" }
								}'>

                        <!--

                            NOTE: only the first image is NOT using lazy loading (to avoid 'jumping')
                            lazy is optional but recommended: ~80% of visitors don't slide through images!

                            Images are using srcset for responsiveness!

                        -->
                        <div class="swiper-wrapper text-center">

                            <!-- slider 1 -->
                            <div class="swiper-slide">
                                <div class="swiper-zoom-container">
                                    <img class="bg-suprime img-fluid rounded max-h-600"

                                         sizes="(max-width: 768px) 100vw"

                                         src="{{asset('images/gym/medium/3.jpg')}}"
                                         alt="...">
                                </div>
                            </div>

                            <!-- slider 2 -->
                            <div class="swiper-slide">
                                <div class="swiper-zoom-container">
                                    <img class="lazy bg-suprime img-fluid rounded max-h-600"

                                         sizes="(max-width: 768px) 100vw"


                                         src="{{asset('images/gym/medium/5.jpg')}}"
                                         alt="...">
                                </div>
                            </div>

                            <!-- slider 3 -->
                            <div class="swiper-slide">
                                <div class="swiper-zoom-container">
                                    <img class="lazy bg-suprime img-fluid rounded max-h-600"

                                         sizes="(max-width: 768px) 100vw"

                                         src="{{asset('images/gym/medium/7.jpg')}}"
                                         alt="...">
                                </div>
                            </div>

                        </div>

                        <!-- Left|Right Arrows -->
                        <div class="swiper-button-next rounded-circle shadow-xs d-none d-md-block"></div>
                        <div class="swiper-button-prev rounded-circle shadow-xs d-none d-md-block"></div>

                        <!-- Progress Bar -->
                        <div class="swiper-pagination position-relative mt-4 h--1"></div>

                    </div>
                    <!-- /SWIPER SLIDER -->






                </div>


                <div class="col-lg-5 col-md-6 order-2 mb-5">

                    <div class="clearfix"><!-- sticky-kit -->

                        <!-- TITLE -->
                        <h1 class="h2 h3-xs font-weight-medium mb-5">
                            {{$table->code}}
                            <span class="d-block text-muted fs--14">{{__('Code')}}</span>
                        </h1>



                        <!-- Form -->




                            <!-- SIZE -->
                            <div class="clearfix mb-3">

                                <h6 class="font-weight-medium">
                                    {{__('Chairs')}}
                                </h6>


                                <div class="clearfix mt-2">
                                    <label class="form-selector">
                                        <input required type="radio" name="size">
                                        <span>{{$table->chairs}}</span>
                                    </label>




                                </div>

                            </div>







                            <!-- CONFIGURATOR -->
                            <div class="clearfix mb-5">

                                <h6 class="font-weight-medium">
                                    {{__('Describe')}}
                                </h6>


                                <div class="bg-white shadow-xs rounded-xl p-4 mb-4 mb-2-xs bg-primary-soft-hover transition-bg-ease-150 text-decoration-none text-gray-800">

                                    <p>
                                        {{$table->getDescribe()}}
                                    </p>
                                </div>

                            </div>
                            <!-- /CONFIGURATOR -->


                        <div class="tab-content">

                            <!-- ACCOUNT TAB -->
                            <div id="tab_account" class="tab-pane active">

                                <form method="post" action="{{route('order.store')}}" novalidate class="bs-validate" enctype="multipart/form-data">
                                @csrf
                                    <input  type="hidden" name="table_id"  value="{{$table->id}}" class="form-control text-center ">
                                <!-- PERSONAL DETAIL -->
                                    <div class="p-4 shadow-xs border bt-0 mb-4 bg-white">

                                        <div class="row">



                                            <!-- detail -->
                                            <div class="col">

                                                <div class="row">

                                                    <div class="col-12 col-sm-6 col-md-12">

                                                        <div class="form-label-group mb-3">
                                                            <input required placeholder="{{__(__('Date'))}}" id="date" name="date" readonly="readonly" type="text" class="form-control" value="{{session('date')}}">
                                                            <label for="account_first_name">{{__('Date')}}</label>
                                                        </div>

                                                    </div>

                                                    <div class="col-12 col-sm-6 col-md-6">

                                                        <div class="form-label-group mb-3">
                                                            <input required placeholder="{{__(__('From'))}}" id="start_time" name="start_time" readonly="readonly" type="text" class="form-control" value="{{session('start_time')}}">
                                                            <label for="account_first_name">{{__('From')}}</label>
                                                        </div>

                                                    </div>


                                                    <div class="col-12 col-sm-6 col-md-6">

                                                        <div class="form-label-group mb-3">
                                                            <input required placeholder="{{__(__('To'))}}" id="end_time" name="end_time" readonly="readonly" type="text" class="form-control" value="{{session('end_time')}}">
                                                            <label for="account_first_name">{{__('To')}}</label>
                                                        </div>

                                                    </div>












                                                </div>





                                            </div>
                                            <!-- detail -->

                                        </div>



                                    </div>
                                    <!-- /PERSONAL DETAIL -->









                                    <div class="border-top pt-4 mt-1">

                                        <button class="btn btn-block btn-danger bg-gradient-danger text-white px-4 b-0">
													<span class="px-4 p-0-xs">
														<i>
															<svg width="22px" height="22px" x="0px" y="0px" viewBox="0 10 459.529 500.529">
																<path fill="#ffffff" d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2    l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17    s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17    S7.65,55.231,17,55.231z"></path>
																<path fill="#ffffff" d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764    S114.183,438.298,135.433,438.298z"></path>
																<path fill="#ffffff" d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05    c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083    C339.433,422.431,356.15,438.298,376.267,438.298z"></path>
															</svg>
														</i>


														<span class="fs--18">{{__('Create')}}  {{__('Table')}}</span>
													</span>




                                        </button>

                                    </div>

                                </form>

                            </div>




                        </div>




                    </div>

                </div>

            </div>


        </div>
    </section>
    <!-- /PRODUCT -->

    <!-- QUICK FAQ -->
    <section class="bg-gradient-linear-primary text-white">
        <div class="container">


            <div class="text-center mb-7">
						<span class="badge badge-secondary badge-soft bg-gray-600 text-white badge-pill font-weight-light pl-2 pr-2 pt--6 pb--6">
							{{__('HOW DO I START?')}}
						</span>
                <h2 class="h1 mb-5 mt-2 font-weight-normal">{{__('Frequently Asked Questions')}}</h2>
            </div>


            <div class="row">

                <div class="col-12 col-md-5 offset-md-1">

                    <div class="d-flex mb-3">

                        <!-- icon -->
                        <div class="w--50 fi mdi-filter_1 fs--25 mt--n6 text-muted"></div>

                        <div class="ml-4 mr-4">

                            <h3 class="h5 text-white">




                            </h3>

                            <p class="mb-6 mb-md-8">

                            </p>

                        </div>

                    </div>


                    <div class="d-flex mb-3">

                        <!-- icon -->
                        <div class="w--50 fi mdi-filter_2 fs--25 mt--n6 text-muted"></div>

                        <div class="ml-4 mr-4">

                            <h3 class="h5 text-white">



                            </h3>

                            <p class="mb-6 mb-md-8">
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-12 col-md-5">

                    <div class="d-flex mb-3">

                        <!-- icon -->
                        <div class="w--50 fi mdi-filter_3 fs--25 mt--n6 text-muted"></div>

                        <div class="ml-4 mr-4">

                            <h3 class="h5 text-white">



                            </h3>

                            <p class="mb-6 mb-md-8">




                            </p>

                        </div>

                    </div>

                    <div class="d-flex mb-3">

                        <!-- icon -->
                        <div class="w--50 fi mdi-filter_4 fs--25 mt--n6 text-muted"></div>

                        <div class="ml-4 mr-4">

                            <h3 class="h5 text-white">
                            </h3>

                            <p class="mb-6 mb-md-8">
                            </p>

                        </div>

                    </div>

                </div>

            </div>





        </div>
    </section>
    <!-- /QUICK FAQ -->



@endsection
