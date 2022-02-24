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



                <div class="portlet-body">
                    <div class="container py-6">


                        <div class="container">
                            <div class="justify-content-center">
                                <div id="vendorRegister">

                        <div class="card-header" style="width: auto;border: 2px solid black">


                            <form action="{{route('employee.table.post.check')}}" id="form_data" class="d-inline" method="get">


                                @csrf
                                <div class="form-label-group col-6 mb-3">
                                    <input type="number" id="chairs" name="chairs"  min="1" max="12"     value="{{old('chairs')?old('chairs'):(isset($chairs)?$chairs:'')}}" class="form-control" required>
                                    <label>{{__('How many chairs?')}}</label>
                                </div>


                                <div class="form-label-group col-6 mb-3">
                                    <input type="date" id="date" name="date" value="{{old('date')?old('date'):(isset($date)?$date:'')}}" class="form-control" required>
                                    <label >{{__('Date')}}</label>
                                </div>


                                <div class="form-label-group col-6 mb-3">
                                    <input type="time" id="start_time" name="start_time" value="{{old('start_time')?old('start_time'):(isset($start_time)?$start_time:'')}}" class="form-control" required>
                                    <label >{{__('From')}}</label>
                                </div>
                                <div class="form-label-group col-6 mb-3">
                                    <input type="time" id="end_time" name="end_time" value="{{old('end_time')?old('end_time'):(isset($end_time)?$end_time:'')}}" class="form-control" required>
                                    <label >{{__('To')}}}</label>
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

                                        <th class="text-gray-500 font-weight-normal fs--14 w--200"> {{__('Table')}} </th>
                                        <th class="text-gray-500 font-weight-normal fs--14 w--200"> {{__('Chairs')}} </th>



                                    </tr>
                                    </thead>

                                    <!-- #item_list used by checkall: data-checkall-container="#item_list" -->
                                    <tbody id="item_list">
                                    @if(isset($tables) && $tables->count()>0)
                                        <?php $i=1 ?>
                                    @foreach($tables as $table)
                                    <!-- product -->
                                    <tr>
                                        <!-- check item -->


                                        <!-- image -->
                                           <td>{{$i++}}</td>
                                        <!-- product name -->


                                        <!-- price -->
                                        <td>
                                           {{$table->code}}

                                        </td>
                                        <td >
                                            {{$table->chairs}}
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


    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(function(){
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;
            var day = dtToday.getDate();
            var year = dtToday.getFullYear();
            if(month < 10)
                month = '0' + month.toString();
            if(day < 10)
                day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            alert(maxDate);
            $('#date').attr('min', maxDate);
        });
    </script>

    <!-- Trigger the modal with a button -->
   <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

    <!-- Modal -->

@endcomponent
