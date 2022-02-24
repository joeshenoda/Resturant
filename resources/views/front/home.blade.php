@component('front.components.page')
    @slot('title','')













    <!-- COLOR SECTION -->
    <section>
        <div class="container container-ignore-breakpoints">

            <!--

                bg-gradient-linear-default

            -->




            <div id="fouad" class="carousel slide py-2 bg-gradient-linear-default text-white rounded-xl" data-ride="carousel">
                <div class="container container-ignore-breakpoints">
                <div class="carousel-inner" style="max-height: 500px; overflow: hidden">
                    @for($i=1;$i<=10;$i++)
                        <div class="carousel-item {{($i==1)?'active':''}}">
                            <img class="d-block w-100" src="{{asset('images/gym/medium/'.$i.'.jpg')}}" >
                        </div>
                    @endfor
                </div>
                <a class="carousel-control-prev" href="#fouad" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#fouad" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="container-fluid " style="padding-left: 80px;padding-right: 80px">
                <div class="row mt-2 "   >
                    @for($i=1;$i<=10;$i++)
                        <div class="col-2 col-md-1 p-0  {{($i==1)?'active':''}}" data-target="#fouad" data-slide-to="{{$i-1}}" style="margin: 5px">
                            <div class="img-thumbnail">
                                <div style="max-height: 45px;max-width: 65px; overflow: hidden">
                                    <img class="img img-fluid" src="{{asset('images/gym/small/'.$i.'.jpg')}}" >
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            </div>

            <div class="py-7 bg-gradient-linear-success text-white rounded-xl" style="margin-top: 100px">
                <div class="container container-ignore-breakpoints">

                    <div class="max-w-800 mx-auto text-white">

                        <h2 class="display-4 h2-xs font-weight-bold mb-5 text-shadow-lg">


                            {{__('Resturant')}}
                        </h2>

                        <p class="lead h6-xs text-white opacity-8 mb-5">

                   </p>

                        <a href="{{route('tables')}}" class="btn btn-danger shadow-dark-xlg row-pill font-weight-medium">
                            {{__('Explore')}} {{__('Our Tables')}}
                        </a>



                    </div>

                </div>
            </div>


        </div>
    </section>








    <!-- block : services -->
    <section id="section_about">
        <div class="container">


            <!-- Services -->
            <div class="row d-flex flex-wrap align-items-center my-7">

                <div class="order-lg-2 col-12 col-lg-12 mb-12">

                    <hr class="h--1 bg-success w--50 d-inline-block">
                    <h2 class="h1 text-success mb-4">
                        {{__('Services')}}
                    </h2>


                    <p class="lead mb-5">

              </p>

                    <a href="{{route('services')}}" class="btn btn-success btn-pill btn-soft">
                        {{__('Explore')}} {{__('Our Services')}}
                    </a>

                </div>

            <!--    <div class="order-lg-1 col-12 col-lg-6 mb-5">

                    <div class="row gutters-md gutters-xs--xs">

                        <div class="col-6 jarallax" data-jarallax-element="-20">

                            <div class="bg-white shadow-xs rounded-xl p-4 mb-4 mb-2-xs bg-primary-soft-hover transition-bg-ease-150 text-decoration-none text-gray-800">
                                <i class="fi fi-support fs--45"></i>
                                <h3 class="h5 py-3">24/7 Support</h3>
                                <p>
                                    Thanks Hospitalia for the quality of service you provided me yesterday, I was very sick and my husband contacted you seeking support and your employee was very good&nbsp;&nbsp;and helpful.
                                </p>
                            </div>

                        </div>

                        <div class="col-6 jarallax" data-jarallax-element="30">

                            <div class="bg-white shadow-xs rounded-xl p-4 mb-4 mb-2-xs bg-success-soft-hover transition-bg-ease-150 text-decoration-none text-gray-800">
                                <i class="fi fi-cog fs--45"></i>
                                <h3 class="h5 py-3">Full Gulp</h3>
                                <p>
                                    Immediate response experienced doctors and speedy home visits when in need..Thanks a million
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

-->
        </div>
    </section>



















    <!-- PARALLAX -->
    <section class="position-relative jarallax overlay-dark overlay-opacity-7 text-white p-0 bg-cover" style="background-image:url('demo.files/images/unsplash/covers/perry-grone-lbLgFFlADrY-unsplash.jpg')">
        <div class="container pt--250 pb--250 text-center position-relative z-index-2">


            <h2 style="color: white">{{__('Resturant')}}</h2>



            <a href="{{route('tables')}}"class="btn btn-pill btn-light shadow-none transition-hover-top">
                <i class="fi fi-layers-middle"></i>
                {{__('Explore')}} {{__('Our Tables')}}
            </a>

        </div>

        <!-- lines, looks like through a glass -->
        <div class="absolute-full w-100 overflow-hidden opacity-5">

        </div>

    </section>
    <!-- /PARALLAX -->







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










@endcomponent
