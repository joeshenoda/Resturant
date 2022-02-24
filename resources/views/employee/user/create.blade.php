@component('employee.components.page')

        @slot('title','')







        <div class="row gutters-sm">

            <div class="container">
                <div class="justify-content-center">
                    <div id="vendorRegister">
                        <form method="POST" id="vendorRegisterForm" action="{{isset($user)?route('employee.user.update', $user):route('employee.user.store')}}" aria-label="{{ __('Register') }}">
                            @csrf


                            @if(isset($user))
                                {{method_field('PUT')}}
                            @endif
                            <div class="col-12 col-xl-12 mb-3">

                                <!-- start:portlet -->
                                <div class="portlet">

                                    <div class="portlet-header border-bottom">




                                        <span>

                                            @if(isset($user))
                                                {{__('Edit')}}  :  {{$user->name}}
                                            @else
                                                {{__('Create')}}  {{__('User')}}
                                            @endif
                                        </span>
                                    </div>

                                    <div class="portlet-body">
                                        <div class="container py-6">

                                            <!-- <div class="form-label-group mb-3">
                                                 <select id="select_options" class="form-control bs-select">
                                                     <option value="1">Option 1</option>
                                                     <option value="2">Option 2</option>
                                                     <option value="3">Option 3</option>
                                                 </select>
                                                 <label for="select_options">Bootstrap Select Vendor</label>
                                             </div>

                                             <div class="form-label-group mb-3">
                                                 <select id="select_options2" class="form-control">
                                                     <option value="1">Option 1</option>
                                                     <option value="2">Option 2</option>
                                                     <option value="3">Option 3</option>
                                                 </select>
                                                 <label for="select_options2">Regular Select</label>
                                             </div> -->

                                            <div class="form-label-group mb-3">

                                                <input type="text"  placeholder="{{__('Name')}}"   class="form-control"  name="name" id="name" placeholder=" {{__('Name')}}" value="@if(old('name')){{old('name')}}@elseif(isset($user)){{$user->name}}@endif">
                                                @if ($errors->has('name'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </div>
                                                @endif
                                                <label for="name" > {{__('Name')}}</label>


                                            </div>






                                            <div class="form-label-group mb-3">

                                                <input type="text"  placeholder="{{__('Email')}} /{{__('Username')}}"   class="form-control"  name="email" id="email" placeholder=" {{__('Email')}}" value="@if(old('email')){{old('email')}}@elseif(isset($user)){{$user->email}}@endif">
                                                @if ($errors->has('email'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </div>
                                                @endif
                                                <label for="name" > {{__('Email')}} /{{__('Username')}}</label>


                                            </div>





                                            <div class="form-label-group mb-3">

                                                <input type="text"  placeholder="{{__('Phone')}}"   class="form-control"  name="phone" id="phone" placeholder=" {{__('Phone')}}" value="@if(old('phone')){{old('phone')}}@elseif(isset($user)){{$user->phone}}@endif">
                                                @if ($errors->has('phone'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                    </div>
                                                @endif
                                                <label for="name" > {{__('Phone')}}</label>


                                            </div>


                                            <div class="form-label-group mb-3">


                                                <input type="password"   name="password" id="password" class="form-control" placeholder=" {{__('Password')}}">
                                                @if ($errors->has('password'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </div>
                                                @endif
                                                <label for="name" >{{__('Password')}}</label>


                                            </div>



                                            <div class="form-label-group mb-3">



                                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="  {{__('Password Confirm')}}">
                                                @if ($errors->has('password_confirmation'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                    </div>
                                                @endif
                                                <label for="password_confirmation" >{{__('Password Confirm')}}</label>

                                            </div>





                                            <div class="form-label-group mb-3">

                                                <input type="text"  placeholder="{{__('Address')}}"   class="form-control"  name="address" id="address" placeholder=" {{__('Address')}}" value="@if(old('address')){{old('address')}}@elseif(isset($user)){{$user->name}}@endif">
                                                @if ($errors->has('address'))
                                                    <div class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </div>
                                                @endif
                                                <label for="name" > {{__('Address')}}</label>


                                            </div>












                                        </div>
                                    </div>
                                    <div class="mt-3">



                                            @if(isset($user))
                                        <button id="submit" type="submit" class=" js-ajax btn btn-sm btn-primary btn-pill px-2 py-1 fs--15 " style="float:left"><span> {{__('Save Changes')}}</span> <span><i class="fa
                                   fa-send"></i></span></button>


                                                @else

                                                <button id="submit" type="submit" class=" js-ajax btn btn-sm btn-success btn-pill px-2 py-1 fs--15 " style="float:left"><span> {{__('Create')}}</span> <span><i class="fa
                                   fa-send"></i></span></button>
                                        @endif
                                    </div>

                                </div>
                                <!-- end:portlet -->

                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>











<!--
    <div class="bg-white shadow-xs p-2 mb-4 rounded">
        <div class="clearfix bg-light p-2 rounded d-flex align-items-center">
							<span class="btn row-pill btn-sm bg-gradient-warning b-0 py-1 mb-0 float-start">
								<i class="fi fi-round-info-full"></i>
								Note
							</span>
            <span class="d-block px-2 text-muted text-truncate">
								This is a basic demo! Please see main <a href="../../html_frontend/documentation/" target="smarty" class="link-muted">full documentation here</a>.
							</span>
        </div>
    </div>

-->








@endcomponent
