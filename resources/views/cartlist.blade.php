@extends('master')
@section("content")
<div class="custom-cartlist">
     <div class="col-sm-12">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
            @foreach($product as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-image" src="{{$item->photo}}">
                  </a>
             </div>
             <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h4>{{$item->price}}Tk</h4>
                      <h5>{{$item->des}}</h5>
                    </div>
             </div>
             <div class="col-sm-4 remove-cart">
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove to Cart</a>
             </div>
            </div>
            @endforeach
          </div>
          <a class="btn btn-success order-now" href="ordernow">Order Now</a> <br> <br>

     </div>
</div>
@endsection 