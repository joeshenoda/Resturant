@extends('layouts.app')
@section('title', ' | '. __('My checks'))
@section('content')
    <div class="container">
        <h3>{{__('My Orders')}}</h3>

        <div class="row">
            @if($orders && count($orders) > 0)
                @foreach($orders as $order)
                    <div class="col-12">
                        <div class="card mt-3 mb-3">
                            <div class="card-header">
                                <h4 class="m-0">{{__('Order')}}
                                    #{{$order->id}} # {{__('Table')}} : {{$order->table->code}}






                                </h4>




                            <div class="card-footer text-right text-center">
                                <a href="{{route('order.show', $order)}}"
                                   class="btn btn-sm btn-success " style="border-radius: 50px" ><span > {{__('Show Details')}}</span></a>
                            </div>
                        </div>
                    </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 mt-3 mb-3 alert alert-warning text-center"> {{__('No orders')}}</div>
            @endif
        </div>
    </div>
@endsection
