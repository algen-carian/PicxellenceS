
@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/userlogin.css">
  <title>USERLOGIN</title>

  <!-- bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
  
<body style = "background-color: rgb(52, 116, 124)">
  

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-4">
    

    <!-- insert image here -->
    <center>
        <img class = "mt-5" src="assets/Photography  Videography.png" alt="Photo" width="500" height="500" style = "margin-left: -20rem;">
    </center>


    
    </div>
    <div class="col-4">
      <div class="card shadow-lg p-3 rounded-3" style="width: 40rem; background-color: rgb(172, 182, 31);">

        <!-- image logo -->
        <center>
          <img src="assets/picxellence.png" class="card-img-top mt-3" alt="..." style = "max-height: 300px; max-width: 300px;">
        </center>
        
        <div class="card-body">
          <h2 class="card-title mb-2"><center>User Login</center></h2>

          <form class="form form-login" action="/userAuth" method="POST">
        @csrf
    
          <p class="card-text">
            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
              <input id="email" name="email" type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>


            <div class="input-group input-group-sm mb-3">
              <span class="input-group-text" id="inputGroup-sizing-sm">Password</span>
              <input id="password" name="password" type="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">

            </div>
            </div>
          </p>

    
          <center>
            <button type="submit" class= "btn btn-primary "> login </button>  
          <a href="signupform" class="btn btn-danger ">Signup</a>
          </center>
</form>
          <center>
            <a href="adminlogin" style="color:Black" class="btn mt-n1">Admin Login</a>
            <br>
            <a href="#" style="color:black" class="btn mt-n1">Forgot password?</a>
            <br>
          </center>


        </div>
      </div>
    </div>
  </div>
</div>







    <!-- A HREF -->
    <!-- <center>
     <a type="button" href = "userdashboard" class="btn btn-success mt-2 mb-2">Log In</a>
     <a type = "button" href="signupform" class="btn btn-danger mt-2 mb-2 ms-2">Sign up</a>
    </center>
    <center>
    <a href="adminlogin" style="color:Black" class="btn mt-n1">Admin Login</a>
    <br>
    <a href="#" style="color:black" class="btn mt-n1">Forgot password?</a>
    <br>
    </center> -->
                    


</body>
</html>