@component('admin.components.page')

    @slot('title','')







    <div class="row gutters-sm">

        <div class="container">
            <div class="justify-content-center">
                <div id="vendorRegister">
                    <form method="POST" id="vendorRegisterForm" action="#">



                        <div class="col-12 col-xl-12 mb-3">

                            <!-- start:portlet -->
                            <div class="portlet">

                                <div class="portlet-header border-bottom">




                                        <span>

                                            @if(isset($employee))
                                                {{__('Show')}}  :  {{$employee->name}}

                                            @endif
                                        </span>
                                </div>


                                <div class="card">
                                    <div class="card-body">


                                        <div class="row">

                                            <div style="margin-right: 5px;margin-left: 5px" >

                                            <a href="{{route('admin.employee.show.edit', $employee)}}" class="js-ajax btn btn-sm btn-primary btn-pill px-2 py-1 fs--15 ">{{__('Edit')}}</a>

                                            </div>
                                            <div style="margin-right: 5px;margin-left: 5px" >
                                            <form action="{{route('admin.employee.destroy', $employee)}}" class="d-inline" method="post">
                                                @csrf
                                                {{method_field('DELETE')}}
                                            </form>
                                            </div>
                                            <button onclick="delete_all()"  class="js-ajax btn btn-sm btn-danger btn-pill px-2 py-1 fs--15 delBtn">{{__('Delete')}}</button>
                                        </div>

                                    </div>

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

                                            <input type="text" readonly="readonly"  placeholder="{{__('Name')}}"   class="form-control"  name="name" id="name" placeholder=" {{__('Name')}}" value="@if(old('name')){{old('name')}}@elseif(isset($employee)){{$employee->name}}@endif">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('Name')}}</label>


                                        </div>


                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"  placeholder="{{__('Email')}}"   class="form-control"  name="name" id="name" placeholder=" {{__('Name')}}" value="@if(old('name')){{old('name')}}@elseif(isset($employee)){{$employee->email}}@endif">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Email') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('Email')}}</label>


                                        </div>

                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"  placeholder="{{__('Phone')}}"   class="form-control"  name="name" id="name" placeholder=" {{__('Phone')}}" value="@if(old('name')){{old('name')}}@elseif(isset($employee)){{$employee->phone}}@endif">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('Email') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('Phone')}}</label>


                                        </div>





                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"   placeholder="{{__('Code')}}"   class="form-control"  name="code" id="national_id" placeholder=" {{__('Code')}}" value="@if(old('code')){{old('code')}}@elseif(isset($employee)){{$employee->code}}@endif">

                                            <label for="code" > {{__('Code')}}</label>


                                        </div>


                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"   placeholder="{{__('Address')}}"   class="form-control"  name="address" id="address" placeholder=" {{__('Address')}}" value="@if(old('address')){{old('address')}}@elseif(isset($employee)){{$employee->address}}@endif">

                                            <label for="national_id" > {{__('Address')}}</label>


                                        </div>


























                                    </div>
                                </div>
                                <div class="mt-3">



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
