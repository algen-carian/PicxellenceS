<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../assets/css/signupform.css">
   </head>
   
<body>



  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input type="text" placeholder="Enter your name" name = "firstname" required>
          </div>
          <div class="input-box">
            <span class="details">Middle name</span>
            <input type="text" placeholder="Enter your username" name = "middlename" required>
          </div>
          <div class="input-box">
            <span class="details">Last name</span>
            <input type="text" placeholder="Enter your username" name = "lastname" required>
          </div>
          <div class="input-box">
            <span class="details">Contact</span>
            <input type="text" placeholder="Enter your username" name = "contact" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" placeholder="Enter your email" name = "email" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" placeholder="Enter your password" name = "address" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" placeholder="Confirm your password" name = "password" required>
          </div>
        </div>

        <div class="gender-details">
          <input type="radio" name="gender" id="dot-1">
          <input type="radio" name="gender" id="dot-2">
          <input type="radio" name="gender" id="dot-3">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        <div class="button">
          <input type="submit" value="Register">
          <a href = "/adminlogin" style = "text-decoration: none; color: #fff;">Picxellence</a>
      </form>
      <br><br>
      </div>
        <div class="backbutton">
        <a href="/" style="color:red" class="btn">Have an Account?</a>
    </div>
  </div>

</body>
</html>