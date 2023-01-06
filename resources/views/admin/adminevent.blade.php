<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/adminevent.css">
    <title>AdminEvent</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/userdashboard.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
<body id = "boody">
    
  <!-- side -->
  @extends('admin.menu')

      <!-- front end header indicator -->
     
    <section class="hero-section">
      <div class="card-grid">
          <div class="card__background" style="background-image: url('birthday3.png');">
        </div>
        </a> 
          <div class="card__content">
          <div class="card__background" style="background-image: url(assets/event1.jpg)"></div>
            <p class="card__category">Category</p>
            <h3 class="card__heading"></h3>
          </div>
        </a>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(assets/birthday3.png)"></div>
          <div class="card__content">
            <p class="card__category">Event 1</p>
            <h3 class="card__heading">HAPPY BIRTHDAY</h3>
          </div>
        </a>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(assets/wedding1.jpg)"></div>
          <div class="card__content">
            <p class="card__category">Event 2</p>
            <h3 class="card__heading">WEDDING</h3>
          </div>
        </li>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(assets/christening3.jpeg)"></div>
          <div class="card__content">
            <p class="card__category">Event 3</p>
            <h3 class="card__heading">CHRISTENING</h3>
          </div>
        </a>
        <a class="card" href="#">
          <div class="card__background" style="background-image: url(assets/debut1.jpg)"></div>
          <div class="card__content">
            <p class="card__category">Event 4</p>
            <h3 class="card__heading">DEBUT</h3>
          </div>
        </a>
      <div>
    </div>
    </section>

      <script src="js/script.js"></script>

</body>

</html>
 