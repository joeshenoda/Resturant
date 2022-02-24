@component('front.components.page')
    @slot('title','')












    <!-- -->
    <section>
        <div class="container">

            <div class="row">



                <div class="col-12 col-sm-12 col-md-12 col-lg-9">

                    <!--

                        Tab Navigation
                        Last tab remembered using localstorage by sow.nav_deep.js plugin

                    -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link nav-link-remember active" data-toggle="tab" href="#tab_account">{{__('Profile')}}</a>
                        </li>

                   <!--     <li class="nav-item">
                            <a class="nav-link nav-link-remember" data-toggle="tab" href="#tab_address">{{__('Details')}}</a>
                        </li> -->
                    </ul>



                    <div class="tab-content">

                        <!-- ACCOUNT TAB -->
                        <div id="tab_account" class="tab-pane active">

                            <form method="post" action="{{route('profile.update')}}" novalidate class="bs-validate" enctype="multipart/form-data">
                            @csrf
                            @if(isset($user))
                                {{method_field('PUT')}}
                            @endif
                                <!-- PERSONAL DETAIL -->
                                <div class="p-4 shadow-xs border bt-0 mb-4 bg-white">

                                    <div class="row">



                                        <!-- detail -->
                                        <div class="col">

                                            <div class="row">

                                                <div class="col-12 col-sm-6 col-md-6">

                                                    <div class="form-label-group mb-3">
                                                        <input required placeholder="First Name" id="name" name="name" type="text" class="form-control" value="{{$user->name}}">
                                                        <label for="account_first_name">{{__('Name')}}</label>
                                                    </div>

                                                </div>

                                                <div class="col-12 col-sm-6 col-md-6">

                                                    <div class="form-label-group mb-3">
                                                        <input required placeholder="email" id="phone" name="phone" type="text" class="form-control" value="{{$user->phone}}">
                                                        <label for="account_last_name"> {{__('Phone')}}</label>
                                                    </div>

                                                </div>



                                                <div class="col-12 col-sm-6 col-md-6">


                                                    <div class="input-group-over">
                                                        <div class="form-label-group mb-3">
                                                            <input  placeholder=" {{__('Email')}}" id="email" name="email" type="text" class="form-control"  value="{{$user->email}}">
                                                            <label for="account_email"> {{__('Email')}}</label>
                                                        </div>


                                                        <a id="email_edit_show" href="javascript:;" class="btn fs--13" onclick="jQuery('#email').attr('readonly', false); jQuery('#email_edit_show, #email_edit_info').addClass('hide'); jQuery('#email_edit_hide, #email_edit_info').removeClass('hide');jQuery('#email').val('').focus();">
                                                            <i class="fi fi-pencil m-0"></i>
                                                        </a>

                                                        <a id="email_edit_hide" href="javascript:;" class="btn fs--12 hide" onclick="jQuery('#email').attr('readonly', true); jQuery('#email_edit_show, #email_edit_info').removeClass('hide'); jQuery('#email_edit_hide, #email_edit_info').addClass('hide'); jQuery('#email').val({{$user->email}});">
                                                            <i class="fi fi-close m-0"></i>
                                                        </a>

                                                    </div>



                                                </div>



                                                <div class="col-12 col-sm-6 col-md-6">

                                                    <div class="form-label-group mb-3">
                                                        <input required placeholder="{{__('Address')}}" id="address" name="address" type="text" class="form-control" value="{{$user->address}}">
                                                        <label for="account_phone">{{__('Address')}}</label>
                                                    </div>

                                                </div>






                                                <div class="col-12 col-sm-6 col-md-6">
                                                    <div class="form-label-group mb-3">

                                                    <input type="password"   name="password" id="password" class="form-control" placeholder=" {{__('Password')}}">

                                                    <label for="name" >{{__('Password')}}</label>
                                                        </div>


                                                </div>



                                                <div class="col-12 col-sm-6 col-md-6">

                                                    <div class="form-label-group mb-3">

                                                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="  {{__('Password Confirm')}}">

                                                    <label for="password_confirmation" >{{__('Password Confirm')}}</label>
                                                    </div>

                                                </div>



                                            </div>





                                        </div>
                                        <!-- detail -->

                                    </div>



                                </div>
                                <!-- /PERSONAL DETAIL -->









                                <div class="border-top pt-4 mt-1">

                                    <button type="submit" class="btn btn-primary">
                                        <i class="fi fi-check"></i>
                                        {{__('Save Changes')}}
                                    </button>

                                </div>

                            </form>

                        </div>




                    </div>

                </div>

            </div>

        </div>
    </section>
    <!-- / -->

























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
