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

                                            @if(isset($order))
                                                {{__('Show')}} {{__('Order')}}  :  {{$order->id}}

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

                                            <input type="text"  readonly="readonly" placeholder="{{__('Name')}}"   class="form-control"  name="name" id="name" placeholder=" {{__('ID')}}" value="@if(old('name')){{old('name')}}@elseif(isset($order)){{$order->id}}@endif">
                                            @if ($errors->has('name'))
                                                <div class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </div>
                                            @endif
                                            <label for="name" > {{__('ID')}}</label>


                                        </div>



                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"     class="form-control"  placeholder=" {{__('Sessions')}}" value="@if(old('sessions')){{old('sessions')}}@elseif(isset($order)){{$order->user->name}}@endif">

                                            <label for="Sessions" > {{__('Name')}}</label>


                                        </div>          <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"    class="form-control"  value="@if(old('sessions')){{old('sessions')}}@elseif(isset($order)){{$order->user->phone}}@endif">

                                            <label for="Sessions" > {{__('Phone')}}</label>


                                        </div>


                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"    class="form-control"   value="@if(old('sessions')){{old('sessions')}}@elseif(isset($order)){{$order->table->code}}@endif">

                                            <label for="Sessions" > {{__('Table')}}</label>


                                        </div>

                                            <div class="form-label-group mb-3">

                                                <input type="text" readonly="readonly"    class="form-control"   value="@if(old('sessions')){{old('sessions')}}@elseif(isset($order)){{$order->table->chairs}}@endif">

                                                <label for="Sessions" > {{__('Chairs')}}</label>


                                            </div>











                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"    class="form-control"    value="@if(old('period')){{old('period')}}@elseif(isset($order)){{date('m/d/Y', strtotime($order->date))}}@endif">


                                            <label for="period" > {{__('Date')}}</label>


                                        </div>

                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"    class="form-control"    value="@if(old('period')){{old('period')}}@elseif(isset($order)){{$order->start_time}}@endif">


                                            <label for="period" > {{__('From')}}</label>


                                        </div>


                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"    class="form-control"    value="@if(old('period')){{old('period')}}@elseif(isset($order)){{$order->end_time}}@endif">


                                            <label for="period" > {{__('To')}}</label>


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















@endcomponent
