<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admindashboard</title>

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/admindashboard.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body id = "boody">

        @extends('admin.menu')
        
      <!-- front end header indicator -->
      <div class = "home-section">
        <center>
          <div class="text">Welcome back! Today is <span id='date'>
            {{  $formattedDate = date('jS \of F, Y', strtotime(date('Y-m-d'))); }}
           </span>
            </div>
        </center>
      </div>
      <br>
      <br>
    <section class="service-section">
        <div class="text_permission">
            <div class="container">
    
        <!--======================================================  Content  ====================================================-->
                       
                            <div class="row" style="margin-left: auto;margin-right: auto;width: 80%;padding: 10%px;">
                              <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card dashboard text-white bg-primary o-hidden h-100">
                                  <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="mr-5"><h5>Revenue</h5></div>
                                          {{ $data[0] }}

                                    </div>
                                  <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                                      <span class="float-left">view >>></span>
                                    <span class="float-right">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card dashboard text-white bg-warning o-hidden h-100">
                                  <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fa fa-folder-open-o" aria-hidden="true"></i>
                                    </div>
                              <div class="mr-5"><h5>Events</h5></div>
                                    {{ $data[1] }}
                                  </div>
                                  <a class="card-footer text-white clearfix small z-1" href="reviews.html">
                                      <span class="float-left"> >>></span>
                                    <span class="float-right">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card dashboard text-white bg-success o-hidden h-100">
                                  <div class="card-body">
                                    <div class="card-body-icon">
                                      <i class="fa fa-fw fa-calendar-check-o"></i>
                                    </div>
                                    <div class="mr-5"><h5>Reservation</h5></div>
                                    {{ $data[2] }}
                                  </div>
                                  <a class="card-footer text-white clearfix small z-1" href="bookings.html">
                                      <span class="float-left">View >>></span>
                                    <span class="float-right">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                              <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="card dashboard text-white bg-danger o-hidden h-100">
                                  <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fa fa-archive" aria-hidden="true"></i>
                                    </div>
                                    <div class="mr-5"><h5>Services</h5></div>
                                    {{ $data[3]}}
                                  </div>
                                  <a class="card-footer text-white clearfix small z-1" href="bookmarks.html">
                                      <span class="float-left">View</span>
                                    <span class="float-right">
                                      <i class="fa fa-angle-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                          </div>
     <!--=================================================End ===================================================-->
    


            </div>
        </div>
    </section>

</body>

</html>
 