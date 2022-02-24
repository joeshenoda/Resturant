@component('employee.components.page')
    @slot('title','')


   <!-- <div class="bg-white shadow-xs p-2 mb-4 rounded">
        <div class="clearfix bg-light p-2 rounded d-flex align-items-center">
							<span class="btn row-pill btn-sm bg-gradient-warning b-0 py-1 mb-0 float-start">
								<i class="fi fi-round-info-full"></i>
								Note
							</span>
            <span class="d-block px-2 text-muted text-truncate">
								This is a basic demo! Please see main <a href="../../html_frontend/documentation/" target="smarty" class="link-muted">full documentation here</a>.
							</span>
        </div>
    </div> -->
    <div class="row gutters-sm">

        <!-- start:col: -->
        <div class="col-12 mb-3">

            <!-- start:portlet -->
            <div class="portlet">

                <div class="portlet-header border-bottom">
                    <span>{{__('Visitors')}}</span>


                    <div class="text-center" >

                        <span > {{__('Total')}}      <span class=" badge badge-danger" > {{$orders->count()}}</span></span>

                    </div>
                </div>


                <div class="portlet-body">
                    <div class="container py-6">


                        <div class="container">
                            <div class="justify-content-center">
                                <div id="vendorRegister">

                        <div class="card-header" style="width: auto;border: 2px solid black">


                            <form action="{{route('employee.visitors.date')}}" id="form_data" class="d-inline" method="get">


                                @csrf

                                <div class="form-label-group col-6 mb-3">
                                    <input type="date" id="date" name="date" value="{{old('date')?old('date'):(isset($date)?$date:'')}}" class="form-control" required>
                                    <label for="teacher_id">{{__('Date')}}</label>
                                </div>
                                <button  type="submit"  class="js-ajax btn btn-sm btn-danger btn-pill px-2 py-1 fs--15 ">{{__('Search')}}</button>


                            </form>
                        </div>




</div>
                            </div>
                        </div>
                        <br>
                        <br>

                            <div class="table-responsive">
                                <table class="table table-framed dataTable">
                                    <thead>
                                    <tr>

                                        <th class="text-gray-500 font-weight-normal fs--14 w--120">{{__('ID')}} </th>
                                        <th class="text-gray-500 font-weight-normal fs--14 min-w-300"> {{__('Name')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--200"> {{__('Table')}} </th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--200"> {{__('Date')}} </th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--200"> {{__('From')}} </th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--200"> {{__('To')}} </th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--120 text-center">{{__('Created_at')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--100 text-center">{{__('Updated_at')}}</th>

                                    </tr>
                                    </thead>

                                    <!-- #item_list used by checkall: data-checkall-container="#item_list" -->
                                    <tbody id="item_list">
                                    @if(isset($orders) && $orders->count()>0)
                                        <?php $i=1 ?>
                                    @foreach($orders as $order)
                                    <!-- product -->
                                    <tr>
                                        <!-- check item -->


                                        <!-- image -->
                                           <td>{{$i++}}</td>
                                        <!-- product name -->
                                        <td>

                                          <a href="{{route('employee.user.show',$order->user)}}">{{$order->user->name}}</a>
                                        </td>

                                        <!-- price -->
                                        <td>
                                            {{$order->table->code}}

                                        </td>
                                        <td >
                                            {{$order->date}}
                                        </td>
                                        <td >
                                            {{$order->start_time}}
                                        </td>
                                        <td >
                                            {{$order->end_time}}
                                        </td>
                                        <!-- brand -->
                                        <td >
                                            {{$order->created_at}}
                                        </td>

                                        <!-- status -->
                                        <td>
                                            {{$order->updated_at}}
                                        </td>


                                    </tr>

                                    @endforeach
                                    @endif
                                    <!-- /product -->


                                    <!-- product -->

                                    <!-- /product -->

                                    </tbody>



                                </table>
                            </div>









                    </div>
                </div>

            </div>
            <!-- end:portlet -->

        </div>
        <!-- end:col: -->



        <!-- start:col: -->

        <!-- end:col: -->

    </div>




    <!-- Trigger the modal with a button -->
   <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

    <!-- Modal -->

@endcomponent
