@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>My orders </h4>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->photo}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>Name : {{$item->name}}</h2>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Phone : {{$item->phone}}</h5>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Payment Status : {{$item->payment_status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>

                    </div>
             </div>
             <div class="col-sm-4 remove-cart">
                <a href="/removeorder/{{$item->order_id}}" class="btn btn-warning" >Remove order</a>
             </div>
            </div>
           
            @endforeach
          </div>

     </div>
</div>
@endsection 