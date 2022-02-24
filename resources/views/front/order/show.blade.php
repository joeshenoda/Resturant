@component('front.components.page')
    @slot('title','')

    <div class="container">
        <div class="text-right">
            <a href="{{route('orders')}}" class="btn btn-secondary"><span>{{__('Back to All')}}  {{__('Orders')}}</span> <span><i class="fa fa-arrow-left"></i></span></a>
        </div>
        <div class="card mt-3 mb-3">
            <div class="card-header">
                <h4 class="m-0">{{__('Order')}}
                    #{{$order->id}} # {{__('Table')}} : {{$order->table->code}}</h4>

            </div>
            <div class="card-body ">


                <?php

                $user=\App\Models\User::where('id',$order->user_id)->first();

                ?>
                <div class="row" style="padding-top: 100px">
                    <div class="col-12 col-md-4">
                        <table>
                            <tbody class="table table-bordered  ">
                            <tr>
                                <th>{{__('ID')}}</th>
                                <td colspan="2"># {{$user->id}}</td>
                            </tr>
                            <tr>
                                <th>{{__('Name')}}</th>
                                <td>{{$user->name}}</td>

                            </tr>
                            <tr>
                                <th> {{__('Email')}}</th>
                                <td>{{$user->email}}</td>

                            </tr>


                            <tr>
                                <th>{{__('Phone')}} </th>
                                <td colspan="2" style="direction: ltr">{{$user->phone}}</td>
                            </tr>


                            <tr>
                                <th>{{__('Address')}} </th>
                                <td colspan="2" style="direction: ltr">{{$user->address}}</td>
                            </tr>






                            <tr>
                                <th>{{__('Date')}}</th>
                                <td colspan="2">{{date('m/d/Y', strtotime($order->created_at))}}</td>
                            </tr>



                            <tr>
                                <th>{{__('Table')}}</th>
                                <td colspan="2">{{$order->table->code}}</td>
                            </tr>

                            <tr>
                                <th>{{__('Chairs')}}</th>
                                <td colspan="2">{{$order->table->chairs}} </td>
                            </tr>

                            <tr>
                                <th>{{__('From')}}</th>
                                <td colspan="2">{{$order->start_time}} </td>
                            </tr>


                            <tr>
                                <th>{{__('To')}}</th>
                                <td colspan="2">{{$order->end_time}} </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>


                        <div class="col-12 col-md-2">

                        </div>
                        <div class="col-12 col-md-6" style="background-color: lightgrey"><!--#98e1b7  -->
                            <h5 class="direct-chat-messages" style="color: red;font-style: italic;margin-top: 100px;margin-left: 10px;margin-right: 10px;">{{__('Congratulations, you have successfully subscribed. Please wait for the application to be accepted')}}  </h5>
                        </div>



                </div>


            </div>
        </div>
    </div>
@endcomponent
