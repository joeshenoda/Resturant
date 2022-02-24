@component('admin.components.page')

    @slot('title','')

<div class="card" >
    <div  class="card-body">


    <form method="get" id="vendorRegisterForm" action="{{route('admin.table.get')}}" aria-label="{{ __('Get') }} {{__('table')}}">
        @csrf

        <div class="form-label-group mb-3">
            <select id="table_id"  name="table_id" class="form-control">
                @foreach(\App\Models\Tables::all() as $table_id)
                    <option value="{{$table_id->id}}" @if(isset($table)){{($table_id->id== $table->id)?'selected':''}} @endif>{{$table_id->code}}</option>

                @endforeach

            </select>
            <label for="table_id">{{__('table')}}</label>
        </div>



        <button id="submit" type="submit" class=" js-ajax btn btn-sm btn-success btn-pill px-2 py-1 fs--15 " style="float:left"><span> {{ __('Get') }} {{__('Table')}}</span> <span><i class="fa
                                   fa-send"></i></span></button>


    </form>

    </div>
</div>


    <div class="row gutters-sm">

        <div class="container">
            <div class="justify-content-center">
                <div id="vendorRegister">
                    @if(isset($table))
                    <form method="POST" id="vendorRegisterForm" action="{{isset($table)?route('admin.table.update', $table):route('admin.table.store')}}" aria-label="{{ __('Register') }}">
                        @csrf


                        @if(isset($table))
                            {{method_field('PUT')}}
                        @endif
                        <div class="col-12 col-xl-12 mb-3">

                            <!-- start:portlet -->
                            <div class="portlet">

                                <div class="portlet-header border-bottom">




                                        <span>

                                            @if(isset($table))
                                                {{__('Edit')}}  :  {{$table->name}}
                                            @else
                                                {{__('Create')}}  {{__('table')}}
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

                                            <input type="text"  placeholder="{{__('Code')}}"   class="form-control"  name="code" id="code" placeholder=" {{__('Code')}}" value="@if(old('code')){{old('code')}}@elseif(isset($table)){{$table->code}}@endif">
                                            @if ($errors->has('code'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('code') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('Code')}}</label>


                                        </div>








                                        <div class="form-label-group mb-3">
                                            <textarea type="text" class="form-control" rows="8" name="describe" id="describe" placeholder="{{__('Describe')}}">@if(old('describe')){{old('describe')}}@elseif(isset($table)){{$table->describe}}@endif</textarea>


                                            @if ($errors->has('describe'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('describe') }}</strong>
                                                </div>
                                            @endif
                                            <label for="Purpose" > {{__('Describe')}}</label>


                                        </div>

                                        <div class="form-label-group mb-3">
                                            <textarea type="text" class="form-control" rows="8" name="describe_ar" id="describe_ar" placeholder="{{__('Describe')}} {{__('in Arabic')}}">@if(old('describe_ar')){{old('describe_ar')}}@elseif(isset($table)){{$table->describe_ar}}@endif</textarea>


                                            @if ($errors->has('purpose_ar'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('describe_ar') }}</strong>
                                                </div>
                                            @endif
                                            <label for="Purpose" > {{__('Describe')}} {{__('in Arabic')}}</label>


                                        </div>




                                        <div class="form-label-group mb-3">

                                            <input type="number" min="1" max="12"  placeholder="{{__('Chairs')}}"   class="form-control"  name="chairs" id="chairs" placeholder=" {{__('Chairs')}}" value="@if(old('chairs')){{old('chairs')}}@elseif(isset($table)){{$table->chairs}}@endif">
                                            @if ($errors->has('chairs'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('chairs') }}</strong>
                                                </div>
                                            @endif
                                            <label for="Sessions" > {{__('Chairs')}}</label>


                                        </div>







                                    </div>
                                </div>
                                <div class="mt-3">



                                    @if(isset($table))
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
