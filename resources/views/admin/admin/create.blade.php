@component('admin.components.page')

        @slot('title','')



    <div class="page-title bg-transparent b-0">

        <h1 class="h4 mt-4 mb-0 px-3 font-weight-normal">

            @if(isset($admin))
                {{__('Edit')}}  :  {{$admin->name}}
            @else
                {{__('Create')}}  {{__('Admin')}}
            @endif






        </h1>
<!--
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-sublime fs--13 pb-2 px-3">
                <li class="breadcrumb-item">
                    <a href="index.html" class="js-ajax">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    Components
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Forms
                </li>
            </ol>
        </nav>
 -->
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




        <div class="row gutters-sm">








         <!--

            <div class="col-12 col-xl-12 mb-3">


                <div class="portlet">

                    <div class="portlet-header border-bottom">
                        <span>Form States</span>
                    </div>

                    <div class="portlet-body">
                        <div class="container py-6">

                            <input type="text" class="form-control is-valid mb-3" placeholder=".is-valid">
                            <input type="text" class="form-control is-invalid mb-3" placeholder=".is-invalid">

                        </div>
                    </div>

                </div>


            </div>

 -->










            <!-- start:col: -->

            <!-- end:col: -->



            <!-- start:col: -->

            <!-- end:col: -->
            <div class="col-12 col-xl-12 mb-3">
            <form action="{{isset($admin)?route('admin.admin.update', $admin):route('admin.admin.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                @if(isset($admin))
                    {{method_field('PUT')}}
                @endif

                <div class="row">
                    <div class="col-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group mb-4">
                                    <label for="name" class="{{$errors->has('name')?'text-danger':''}}"> {{__('Name')}}</label>
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" placeholder=" {{__('Name')}}" value="@if(old('name')){{old('name')}}@elseif(isset($admin)){{$admin->name}}@endif">
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group mb-4">
                                    <label for="email" class="{{$errors->has('email')?'text-danger':''}}">{{__('Email')}} </label>
                                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" placeholder=" {{__('Email')}}" value="@if(old('email')){{old('email')}}@elseif(isset($admin)){{$admin->email}}@endif">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                <div class="row">
                                    @if(isset($admin))
                                        <div class="col-12">
                                            <div class="pb-3">
                                                <span class="text-warning">{{__('Keep oldest password')}}</span>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-12 col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="password" class="{{$errors->has('password')?'text-danger':''}}">{{__('Password')}}</label>
                                            <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" placeholder=" {{__('Password')}}">
                                            @if ($errors->has('password'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group mb-4">
                                            <label for="password_confirmation" class="{{$errors->has('password_confirmation')?'text-danger':''}}">{{__('Password Confirm')}}</label>
                                            <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="password_confirmation" placeholder="  {{__('Password Confirm')}}">
                                            @if ($errors->has('password_confirmation'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="text-left">
                                    @if(isset($admin))
                                        <button type="submit" class="btn btn-sm btn-primary">{{__('Edit')}}</button>
                                    @else
                                        <button type="submit" class="btn btn-sm btn-success">{{__('Create')}}</button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

            </div>
        </div>



@endcomponent
