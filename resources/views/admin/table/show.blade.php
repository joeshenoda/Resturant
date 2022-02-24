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

                                            @if(isset($table))
                                                {{__('Show')}}  :  {{$table->code}}

                                            @endif
                                        </span>
                                </div>


                                <div class="card">
                                    <div class="card-body">


                                        <div class="row">

                                            <div style="margin-right: 5px;margin-left: 5px" >

                                            <a href="{{route('admin.table.show.edit', $table)}}" class="js-ajax btn btn-sm btn-primary btn-pill px-2 py-1 fs--15 ">{{__('Edit')}}</a>



                                            </div>
                                            <div style="margin-right: 5px;margin-left: 5px" >
                                            <form action="{{route('admin.table.destroy', $table)}}" class="d-inline" method="post">
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

                                            <input type="text"  readonly="readonly"   class="form-control"   value="@if(old('name')){{old('name')}}@elseif(isset($table)){{$table->code}}@endif">

                                            <label for="name" > {{__('Code')}}</label>


                                        </div>






                                        <div class="form-label-group mb-3">
                                            <textarea type="text"  readonly="readonly" class="form-control" rows="8">@if(old('purpose')){{old('purpose')}}@elseif(isset($table)){{$table->getDescribe()}}@endif</textarea>

                                            <label for="Purpose" > {{__('Describe')}}</label>


                                        </div>





                                        <div class="form-label-group mb-3">

                                            <input type="text" readonly="readonly"    class="form-control" value="@if(old('chairs')){{old('chairs')}}@elseif(isset($table)){{$table->chairs}}@endif">

                                            <label for="Sessions" > {{__('Chairs')}}</label>


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
