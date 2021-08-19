@extends('master')

@section('title','details')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="details-img" src="{{$product['photo']}}" alt="">

        </div>
        <div class="col-sm-6">
            <a href="/" class="go-back">Go back</a>
            <h2>Name:{{$product['name']}}</h2>
            <h3>Price:{{$product['price']}}</h3>
            <h2>Details:{{$product['des']}}</h2>
            <h2>Catagory:{{$product['catagory']}}</h2>
            <br>
            <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary cart-button">Add to Cart</button>
       </form>
           <br>
            <button class="btn btn-success">Buy Now</button>
            
        </div>
    </div>
</div>


@endsection