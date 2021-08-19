@extends('master')

@section('title','details')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <h2>Order details</h2>
        <table class="table">
         
         <tbody>
           <tr>
             <td>Amount</td>
           <td>{{$total}}Tk</td>
           </tr>
           <tr>
             <td>Tax</td>
             <td>0Tk</td>
           </tr>
           <tr>
             <td>Delivery </td>
             <td>10Tk</td>
           </tr>
           <tr>
             <td>Total Amount</td>
           <td>{{$total+10}}Tk</td>
           </tr>
         </tbody>
       </table>
        </div>
        <div class="col-sm-6">
            <h2>Enter your details</h2>
        <form action="/orderplace" method="POST" >
              @csrf
                <div class="form-group">
                  <textarea name="address" placeholder="enter your address" class="form-control" required ></textarea><br>
                  <input type="text" name="phone" placeholder="enter your phone" class="form-control" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label> <br> <br>
                  <input type="radio" value="bkash" name="payment"> <span>Bkash</span> <br> <br>
                  <input type="radio" value="rocket" name="payment"> <span>Rocket</span> <br><br>
                  <input type="radio" value="case on delivery" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-success">Order Now</button>
              </form>
        </div>
       
    </div>
</div>


@endsection