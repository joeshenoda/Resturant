@extends('layouts.app')
@section('title', ' | '. __('Services'))
@section('content')


    <section class="p-0 jarallax overlay-dark overlay-opacity-7 text-white bg-cover" style="background-image:url({{asset('images/gym/medium/6.jpg')}}) ">
        <div class="container">

            <div class="d-middle justify-content-start col-12 col-md-6 min-h-75vh text-center-xs">

                <div class="mt-7overflow-hidden mb-4">

                    <h1 class="h2-xs font-weight-light mb-0">
                       {{__('About')}}  <span class="text-warning font-weight-medium">{{__('Resturant')}}</span>
                    </h1>

                    <p class="h1 h4-xs font-weight-medium mb-4">

                    </p>

                    <p class="lead">

                    </p>

                </div>

            </div>

        </div>

    </section>





    <!-- CALL TO ACTION -->
    <section class="py-5">
        <div class="container">
            <div class="row text-center-xs">

                <div class="col-12 col-md-8">

       </div>

                <div class="col-12 mt-4 d-block d-md-none"><!-- mobile spacer --></div>

                <div class="col-12 col-md-4 text-align-end">
           </div>

            </div>
        </div>
    </section>
    <!-- /CALL TO ACTION -->



    <!-- start :: Passion / Creativity / Innovation -->
    <section class="bg-theme-color-light">
        <div class="container">

            <div class="row">

                <!-- images -->
                <div class="col-12 col-lg-6 mb-5 order-1 order-lg-2">


                </div>


                <div class="col-12 col-lg-6 mb-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0">

                    <h2 class="mb-5 font-weight-medium" style="color: red">
               </h2>


                    <div class="d-flex mb-4">



                        <div class="ml-4 mr-4">

                            <!-- heading -->
                            <h3 class="h5 mb-1">
                                {{__('Who we are?')}}
                            </h3>

                            <!-- text -->
                            <p>
                        </p>

                        </div>

                    </div>


                    <div class="d-flex mb-4">



                        <div class="ml-4 mr-4">

                            <!-- heading -->
                            <h3 class="h5 mb-1">
                                {{__('What we do?')}}
                            </h3>

                            <!-- text -->
                            <p>
                        </p>

                        </div>

                    </div>



                    <div class="d-flex mb-4">


                        <div class="ml-4 mr-4">

                            <!-- heading -->
                            <h3 class="h5 mb-1">

                            </h3>

                            <!-- text -->
                            <p>

                            </p>

                        </div>

                    </div>

                    <div class="text-align-end">
                        <a href="#" class="btn btn-primary btn-soft">{{__('Ready to work together?')}}</a>
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- end :: Passion / Creativity / Innovation -->







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
