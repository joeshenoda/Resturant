@extends('layouts.app')
@section('title', ' | '. __('Tables'))
@section('content')




    <section class="p-0 position-relative overflow-hidden">

        <!--
            Height
                .h-50vh
                .h-75vh
                .h-100vh
        -->
        <div class="swiper-container swiper-btn-group swiper-btn-group-end text-white h-75vh overflow-hidden"
             data-swiper='{
						"slidesPerView": 1,
						"spaceBetween": 0,
						"autoplay": { "delay" : 6500, "disableOnInteraction": true },
						"loop": true,
						"effect": "fade",
						"pagination": { "type": "bullets" }
					}'>

            <div class="swiper-wrapper h-100">

                <!-- slide 1 -->
                <div class="h-100 swiper-slide d-middle overlay-dark overlay-opacity-5 bg-cover text-decoration-none text-white" style="background-image: url({{asset('images/gym/medium/7.jpg')}}) ;">
                    <div class="position-absolute container z-index-10 text-white text-center" data-aos="fade-in" data-aos-delay="150" data-aos-offset="0">
<!--
                        <h1 class="display-3 h1-xs mb-4 font-weight-medium" data-swiper-parallax="-300">
                            Waiting for <span class="text-danger">You</span>!
                        </h1>

                        <div data-swiper-parallax="-100">
                            <a href="#!" class="btn btn-lg btn-outline-light shadow-none transition-hover-top">
                                Take a peek
                            </a>
                        </div>
                    -->
                    </div>
                </div>
                <!-- /slide 1 -->




            </div>

            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-black"></div>
            <div class="swiper-button-prev swiper-button-black"></div>

            <!-- Add Pagination -->
            <div class="swiper-pagination top-0 h--30 mt-4"></div>

            <!-- v shape : .bg-light, .shape-xs (remove .shape-xs for .h-100vh container) -->
            <div class="shape-v shape-xs bottom-0"></div>

        </div>

    </section>
    <!-- /SWIPER -->







    <!-- OFFER BLOCK -->
    <section>
        <div class="container">


            <div class="mb-7 text-center px-3">
                <h2 class="h3-xs text-center-xs font-weight-normal text-danger">
                    <b>  {{__('Explore')}}</b>  {{__('Tables')}}
                </h2>

                <p class="lead max-w-600 mx-auto">
                    {{__('Explore')}}  {{__('Our Tables')}}
                </p>
            </div>

            <form 	action="{{route('tables.search')}}"
                     >
                @csrf
                <div class="sow-search-input w-100">

                    <!-- rounded: form-control-pill -->
                    <div class="input-group-text d-flex align-items-center w-100 h-100 rounded form-control-pill">

                        <input placeholder="{{__('How many chairs?')}}" aria-label="{{__('How many chairs?')}}" name="chairs" type="number" min="1" max="12" class="form-control-sow-search form-control form-control-lg" value="{{old('chairs')?old('chairs'):(isset($chairs)?$chairs:'')}}" required >
                        <input placeholder="{{__('Date')}}" aria-label="{{__('Date')}}" name="date" type="date" id="date" class="form-control-sow-search form-control form-control-lg" value="{{old('date')?old('date'):(isset($date)?$date:'')}}"  required>
                        <input placeholder="{{__('From')}}" aria-label="{{__('From')}}" name="start_time" type="time" class="form-control-sow-search form-control form-control-lg" value="{{old('start_time')?old('start_time'):(isset($start_time)?$start_time:'')}}"  required>
                        <input placeholder="{{__('To')}}" aria-label="{{__('To')}}" name="end_time" type="time"  class="form-control-sow-search form-control form-control-lg" value="{{old('end_time')?old('end_time'):(isset($end_time)?$end_time:'')}}"  required>

                        <span class="sow-search-buttons">

										<!-- search button -->
										<button aria-label="Global Search" type="submit" class="btn shadow-none m-0 px-3 py-2 bg-transparent text-muted">
											<i class="fi fi-search fs--20 m-0"></i>
										</button>

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






            <!-- product list -->
            <div class="row gutters-xs--xs">


                <!--

                    MAIN/FEATURED
                    please pay attention to how order-* is set!
                    See on mobile how looks like! Play to set as desired!

                    You can also insert this "featured" anywhere
                    between them as long .order-2 class is present!

                -->

            @foreach($tables as $table)
                <!-- item -->
                    <div class="order-1 col-6 col-lg-3 mb-4 mb-2-xs">

                        <div class="bg-white shadow-xs shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                            <a href="{{route('table.show',$table)}}" class="d-block text-decoration-none">

                                <!--

                                    3 ways to set the image

                                -->

                                <!-- 1. without .bg-suprime - use image as it is -->
                                <!--
                                <figure class="m-0 text-center rounded-top overflow-hidden">
                                    <img class="img-fluid" src="image.jpg" alt="...">
                                </figure>
                                -->


                                <!-- 2. squared, as background -->
                                <!--
                                <figure class="m-0 text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                                    <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </figure>
                                -->

                                <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->

                                <span class="d-block text-center-xs text-gray-600 py-3">

										<!--
											.max-height-50  = limited to 2 rows of text
											-or-
											.text-truncate
										-->
									  <h3 class="h5 py-3">
											{{$table->code}}
										</h3>



                                       {{__('Chairs')}}
										<span class="d-block">

											<span class="fs--12 text-muted">{{$table->chairs}} </span>
										</span>

									</span>



                                <div class="bg-white shadow-xs rounded-xl p-4 mb-4 mb-2-xs bg-primary-soft-hover transition-bg-ease-150 text-decoration-none text-gray-800">

                                    <p>
                                    <!--   {{$table->getDescribe()}} -->
                                        {!! nl2br ( substr($table->getDescribe(), 0,250 ) ) !!}
                                    </p>
                                </div>

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
                            </a>

                        </div>

                    </div>



                    <!-- /item -->
            @endforeach



















            </div>
            <!-- /product list -->


        </div>
    </section>
    <!-- /OFFER BLOCK -->










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
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script>
       $(function(){
           var dtToday = new Date();

           var month = dtToday.getMonth() + 1;
           var day = dtToday.getDate();
           var year = dtToday.getFullYear();
           if(month < 10)
               month = '0' + month.toString();
           if(day < 10)
               day = '0' + day.toString();

           var maxDate = year + '-' + month + '-' + day;
           alert(maxDate);
           $('#date').attr('min', maxDate);
       });
   </script>

@endsection
