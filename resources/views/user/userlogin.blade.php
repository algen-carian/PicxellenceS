@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="../assets/css/signupform.css">

  <title>USERLOGIN</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
  .alert {
  padding: 20px;
  border-radius: 5px;
  background-color: #f44336;
  color: white;
  left: 40%;
  right: 40%;
  position:fixed;
  z-index: 1;
}.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}.closebtn:hover {
  color: black;
}
</style>

        @if(session()->has('status') || session() === null)
            <div class="alert alert-primary ">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>WARNING!</strong> {{ session()->get('status') }}
              
            </div>
        @endif

  <body>
  <form class="modal-content animate"  method="post" action="/userAuth">
  @csrf
  
  <div class="container">
    <div class="row"><center>
    <img src="assets/picxellence.png" alt="ADMIN" width="300" height="300"></center>
      <h2 style="text-align:center">User login </h2>
      <h2 style="text-align:center">Login With your social Media account </h2>
      
      <div class="container">
    <div class="title">User Signin</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter Email" name= "email" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" placeholder="Enter your Password" name= "password" required>
          </div>
        <div class="button">
          <input type="submit" value="Signin"></a>
        </div>
</form>

<div class="bottom-container">
  <div class="row">
    <div class="col">
      <a href="adminlogin" style="color:Black" class="btn">Admin Login</a>
      <br>
      <a href="signupform" style="color:black" class="btn">Sign up</a>
      <br>
      <a href="#" style="color:black" class="btn">Forgot password?</a>
    </div>
  </div>
</div>

@endsection
</body>
</html>