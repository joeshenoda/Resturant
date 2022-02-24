@component('admin.components.page')

    @slot('title','')

<div class="card" >
    <div  class="card-body">


    <form method="get" id="vendorRegisterForm" action="{{route('admin.employee.get')}}" aria-label="{{ __('Get') }} {{__('Employee')}}">
        @csrf

        <div class="form-label-group mb-3">
            <select id="employee_id"  name="employee_id" class="form-control">
                @foreach(\App\Models\Employee::all() as $employee_id)
                    <option value="{{$employee_id->id}}" @if(isset($employee)){{($employee_id->id== $employee->id)?'selected':''}} @endif>{{$employee_id->name}}</option>

                @endforeach

            </select>
            <label for="employee_id">{{__('employee')}}</label>
        </div>



        <button id="submit" type="submit" class=" js-ajax btn btn-sm btn-success btn-pill px-2 py-1 fs--15 " style="float:left"><span> {{ __('Get') }} {{__('Employee')}}</span> <span><i class="fa
                                   fa-send"></i></span></button>


    </form>

    </div>
</div>


    <div class="row gutters-sm">

        <div class="container">
            <div class="justify-content-center">
                <div id="vendorRegister">
                    @if(isset($employee))
                    <form method="POST" id="vendorRegisterForm" action="{{isset($employee)?route('admin.employee.update', $employee):route('admin.employee.store')}}" aria-label="{{ __('Register') }}">
                        @csrf


                        @if(isset($employee))
                            {{method_field('PUT')}}
                        @endif
                        <div class="col-12 col-xl-12 mb-3">

                            <!-- start:portlet -->
                            <div class="portlet">

                                <div class="portlet-header border-bottom">




                                        <span>

                                            @if(isset($employee))
                                                {{__('Edit')}}  :  {{$employee->name}}
                                            @else
                                                {{__('Create')}}  {{__('employee')}}
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

                                            <input type="text"  placeholder="{{__('Name')}}"   class="form-control"  name="name" id="name" placeholder=" {{__('Name')}}" value="@if(old('name')){{old('name')}}@elseif(isset($employee)){{$employee->name}}@endif">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('Name')}}</label>


                                        </div>



                                        <div class="form-label-group mb-3">

                                            <input type="text"  placeholder="{{__('Email')}} /{{__('Username')}}"   class="form-control"  name="email" id="email" placeholder=" {{__('Email')}}" value="@if(old('email')){{old('email')}}@elseif(isset($employee)){{$employee->email}}@endif">
                                            @if ($errors->has('email'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('Email')}} /{{__('Username')}}</label>


                                        </div>





                                        <div class="form-label-group mb-3">

                                            <input type="text"  placeholder="{{__('Phone')}}"   class="form-control"  name="phone" id="phone" placeholder=" {{__('Phone')}}" value="@if(old('phone')){{old('phone')}}@elseif(isset($employee)){{$employee->phone}}@endif">
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

                                            <input type="text"  placeholder="{{__('Address')}}"   class="form-control"  name="address" id="address" placeholder=" {{__('Address')}}" value="@if(old('address')){{old('address')}}@elseif(isset($employee)){{$employee->name}}@endif">
                                            @if ($errors->has('address'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('Address')}}</label>


                                        </div>







                                        <div class="form-label-group mb-3">

                                            <input type="text"  placeholder="{{__('Code')}}"   class="form-control"  name="code" id="code" placeholder=" {{__('Code')}}" value="@if(old('code')){{old('code')}}@elseif(isset($employee)){{$employee->code}}@endif">
                                            @if ($errors->has('code'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('code') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('Code')}}</label>


                                        </div>













                                    </div>
                                </div>
                                <div class="mt-3">



                                    @if(isset($employee))
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

                        @endif
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
