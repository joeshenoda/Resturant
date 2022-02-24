@component('admin.components.page')
    @slot('title', __(''))





    <div class="page-title bg-transparent b-0">

        <h1 class="h4 mt-4 mb-0 px-3 font-weight-normal">
            {{__('Account Settings')}}
        </h1>

    </div>




    <form novalidate class="bs-validate d-block mb-7" method="post" action="{{route('admin.admin.profile', $admin->id)}}" enctype="multipart/form-data">

        @csrf


            {{method_field('PUT')}}




        <div class="row gutters-sm mb-3">

            <div class="col-12 col-xl-6 mb-3">

                <!-- portlet -->
                <div class="portlet">

                    <!-- portlet : header -->
                    <div class="portlet-header">
										<span class="d-block text-dark text-truncate font-weight-medium">
											 {{__('Account Detail')}}
										</span>
                    </div>
                    <!-- /portlet : header -->


                    <!-- portlet : body -->
                    <div class="portlet-body">

                        <div class="row h-100 d-flex align-items-center">

                            <!-- avatar -->
                            <div class="col-12 col-md-4 col-xl-4 text-center">

                                <!--
                                    Based on `SOW : File Upload`

                                    For ajax:
                                    documentation/plugins-sow-file-upload.html
                                -->
                                <label class="w--120 h--120 rounded-circle text-center position-relative d-inline-block cursor-pointer border border-secondary border-dashed bg-white">

                                    <!-- remove button -->
                                    <a href="#" class="js-file-upload-avatar-circle-remove hide position-absolute absolute-top w-100 z-index-3">
														<span class="d-inline-block btn btn-sm btn-pill bg-secondary text-white pt--4 pb--4 pl--10 pr--10 m--1 mt--n15" title="remove" data-tooltip="tooltip">
															<i class="fi fi-close m-0"></i>
														</span>
                                    </a>

                                    <span class="z-index-2 js-file-input-avatar-circle-container d-block absolute-full z-index-1 hide-empty"><!-- avatar container --></span>

                                    <!-- hidden input (out of viewport, or safari will ignore it) -->
                                    <!-- NOTE: data-file-preview-img-height="118 and <label> has .h--120 (120px). This is because we have a border - so we cut 2px (1px for each side) -->





                                     </label>


                            </div>
                            <!-- /avatar -->

                            <div class="col my-3">

                                <!-- EMAIL ADDRESS -->
                                <div class="input-group-over">

                                    <div class="form-label-group">
                                        <input required  placeholder="Email Address" id="email" name="email" type="email" class="form-control" value="{{$admin->email}}">
                                        <label for="account_email"><span class="text-danger">{{__('Email')}}</span></label>
                                    </div>

                                    <a id="email_edit_show" href="#!" class="btn transition-none sow-util-action"
                                       data-util-self-ignore="true"
                                       data-util-target-hide="#email_edit_show"
                                       data-util-target-show="#email_edit_hide, #email_edit_password_request"
                                       data-util-target-readonly-off="#account_email"

                                       data-util-target-input="#account_email"
                                       data-util-target-input-val=""

                                       data-util-target-focus="#account_email">
                                        <i class="fi fi-pencil m-0"></i>
                                    </a>

                                    <a id="email_edit_hide" href="#!" class="btn transition-none sow-util-action hide"
                                       data-util-self-ignore="true"
                                       data-util-target-hide="#email_edit_hide, #email_edit_password_request"
                                       data-util-target-show="#email_edit_show"
                                       data-util-target-readonly-on="#account_email"

                                       data-util-target-input="#account_email"
                                       data-util-target-input-val="john.doe@gmail.com">
                                        <i class="fi fi-close m-0"></i>
                                    </a>

                                </div>

                                <div id="email_edit_password_request" class="mt-3 hide">

                                    <!-- password -->
                                    <div class="input-group-over">
                                        <div class="form-label-group mb-3">
                                            <input placeholder="Account Password" id="account_password" name="account[password]" type="password" class="form-control">
                                            <label for="account_password">Account Password</label>
                                        </div>

                                        <!-- Show Password -->
                                        <a href="#" class="btn btn-password-type-toggle" data-target="#account_password">
															<span class="group-icon">
																<i class="fi fi-eye m-0"></i>
																<i class="fi fi-close m-0"></i>
															</span>
                                        </a>
                                    </div>
                                    <!-- /password -->

                                </div>
                                <!-- /EMAIL ADDRESS -->

                            </div>

                        </div>

                    </div>
                    <!-- /portlet : body -->

                </div>
                <!-- /portlet -->

            </div>




            <div class="col-12 col-xl-6 mb-3">

                <!-- portlet -->
                <div class="portlet">

                    <!-- portlet : header -->
                    <div class="portlet-header">
										<span class="d-block text-dark text-truncate font-weight-medium">
									 	{{__('Detail')}}
										</span>
                    </div>
                    <!-- /portlet : header -->


                    <!-- portlet : body -->
                    <div class="portlet-body">

                        <div class="row gutters-sm d-flex align-items-center">

                            <div class="col-12 col-md-12">

                                <div class="form-label-group mt-3">
                                    <input required placeholder="First Name" id="name" name="name" type="text" value="{{$admin->name}}" class="form-control">
                                    <label for="account_first_name"> {{__('Name')}}</label>
                                </div>

                            </div>

<!--
                            @if(isset($admin))
                                <div class="col-12">
                                    <div class="pb-3">
                                        <span class="text-warning">{{__('Keep oldest password')}}</span>
                                    </div>
                                </div>
                            @endif -->

                            <div class="col-12 col-md-6">

                                <div class="form-label-group mt-3">
                                    <label for="password" class="{{$errors->has('password')?'text-danger':''}}">{{__('Password')}}</label>
                                    <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder=" {{__('Password')}}">
                                </div>

                            </div>

                            <div class="col-12 col-md-6">

                                <div class="form-label-group mt-3">
                                    <label for="password_confirmation" class="{{$errors->has('password_confirmation')?'text-danger':''}}">{{__('Password Confirm')}}</label>
                                    <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="password_confirmation" placeholder="  {{__('Password Confirm')}}">
                                </div>

                            </div>

                        </div>

                    </div>
                    <!-- /portlet : body -->

                </div>
                <!-- /portlet -->

            </div>

        </div>


        <button type="submit" class="btn btn-primary">
            <i class="fi fi-check"></i>
             {{__('Save Changes')}}
        </button>

    </form>









    @push('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

        <script>
            window.addEventListener('resize', function () {

                myCategory.resize()
            })
        </script>
        <script>



            var ctx = document.getElementById("myCategory").getContext('2d');
            var myCategory = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [

                       "Admins"

                    ],

                    datasets: [
                        {
                            label: '# Fields',
                            backgroundColor: '#e83e8c',
                            data: [
                                {{count(\App\Models\Admin::all())}},

                            ],
                        },

                    ]
                },
                options: {
                    title: {
                        display: true,
                        text: '  Contents',
                    },
                    scales: {
                        xAxes: [{
                            stacked: true,
                            beginAtZero: false,
                        }],
                        yAxes: [{
                            stacked: true,
                            beginAtZero: false

                        }]
                    }
                },
            });





            </script>
   @endpush

@endcomponent
