@extends('master')

@section('title','login')
@section('content')

<div class="container login-page">
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="/register" method="POST">
        @csrf
        <div class="login">
  <div class="login-header">
    <h1> User registration Page</h1>
  </div>
  <div class="login-form">
   <h3>Name:</h3>
    <input type="text" name="name" placeholder="name"/><br>
    <h3>Email:</h3>
    <input type="text" name="email" placeholder="Email"/><br>
    <h3>Password:</h3>
    <input type="password" name="password" placeholder="Password"/>
    <br>
    <input type="submit"  value="Register" class=" btn login-button"/>
    
  </div>
</div>
        
        </form>
    </div>
</div>
</div>


@endsection