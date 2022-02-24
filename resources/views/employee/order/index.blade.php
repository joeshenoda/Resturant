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
                    <span>{{__('Order List')}}</span>


                    <div class="text-center" >

                        <span > {{__('Total')}}      <span class=" badge badge-danger" > {{\App\Models\Order::all()->count()}}</span></span>

                    </div>
                </div>


                <div class="portlet-body">
                    <div class="container py-6">












                            <div class="table-responsive">
                                <table class="table table-framed dataTable">
                                    <thead>
                                    <tr>

                                        <th class="text-gray-500 font-weight-normal fs--14 w--120"> {{__('ID')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 min-w-300"> {{__('User')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--200"> {{__('Table')}} </th>

                                        <th class="text-gray-500 font-weight-normal fs--14 w--120 text-center">{{__('Created_at')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--100 text-center">{{__('Updated_at')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--60 text-align-end">&nbsp;</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--60 text-align-end">&nbsp;</th>

                                    </tr>
                                    </thead>

                                    <!-- #item_list used by checkall: data-checkall-container="#item_list" -->
                                    <tbody id="item_list">
                                    <?php $i=1; ?>
                                    @if(isset($orders) && $orders->count()>0)
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



                                        <!-- brand -->
                                        <td class="text-muted text-center">
                                            {{$order->created_at}}
                                        </td>

                                        <!-- status -->
                                        <td class="text-center">
                                            {{$order->updated_at}}
                                        </td>

                                        <!-- options -->
                                        <td>   <a href="{{route('employee.order.show', $order)}}" class="js-ajax btn btn-sm btn-success btn-pill px-2 py-1 fs--15 ">{{__('Show')}}</a> </td>






                                    </tr>

                                    @endforeach
                                    @endif
                                    <!-- /product -->


                                    <!-- product -->

                                    <!-- /product -->

                                    </tbody>

                                 <!--   <tfoot>
                                    <tr>
                                        <th class="text-gray-500 w--50">
                                            <label class="form-checkbox form-checkbox-primary float-start">
                                                <input class="checkall" data-checkall-container="#item_list" type="checkbox" name="checkbox">
                                                <i></i>
                                            </label>
                                        </th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--120"> </th>
                                        <th class="text-gray-500 font-weight-normal fs--14 min-w-300"> {{__('NAME')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--200"> {{__('EMAIL')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--120 text-center">{{__('Created_at')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--100 text-center">{{__('Updated_at')}}</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--60 text-align-end">&nbsp;</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--60 text-align-end">&nbsp;</th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--60 text-align-end">&nbsp;</th>
                                    </tr>
                                    </tfoot> -->

                                </table>
                            </div>







                        </form>

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
    <div id="multi_delete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <!--    <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                    <h4 class="modal-title">{{__('Delete ALL')}}</h4>
                </div>
                <div class="modal-body">
                    <p> {{__('Are you sure to do this process for')}}</p>
                    <span id="countn"></span> {{__('Item')}}


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{__('No')}}</button>
                    <button type="submit" onsubmit=" " class="btn btn-danger btn_summit">{{__('Yes')}}</button>
                </div>
            </div>

        </div>
    </div>



    @push('script')
        <script>

            delete_all();
            $('.btn_summit').change(function () {
                $(this).parents('form').submit();
            });





        </script>
    @endpush
@endcomponent
