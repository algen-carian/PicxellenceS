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
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/style.css'); }}">
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
                   
                            <div class="row" style="margin-left: auto;margin-right: auto;width: 80%;padding: 10%px;" >

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
     <div class="details">
                <div class="recentReservations">
                    <div class="cardHeader">
                        <h2>Recent Reservations</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>#</td>
                                <td>Name</td>
                                <td>Email</td>
                                <td>Event Date</td>
                                <td>Status</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Algen</td>
                                <td>algen@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>Bryan</td>
                                <td>bryan@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>Mel</td>
                                <td>mel@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status cancelled">Cancelled</span></td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>Yuri</td>
                                <td>yuri@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>Algen</td>
                                <td>algen@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status approved">Approved</span></td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>Bryan</td>
                                <td>bryan@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>Mel</td>
                                <td>mel@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status cancelled">Cancelled</span></td>
                            </tr>

                            <tr>
                                <td>8</td>
                                <td>Yuri</td>
                                <td>yuri@email.com</td>
                                <td>2023-01-08</td>
                                <td><span class="status inProgress">In Progress</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= History ================ -->
                <div class="recentReservations">
                    <div class="cardHeader">
                        <h2>Recent Customers</h2>
                         <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/icon.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Algen <br> <span>Cabalan</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                                <div class="imgBx"><img src="assets/imgs/icon1.jpg" alt=""></div>
                            </td>
                            <td>
                                <h4>Bryan <br> <span>Manggahan</span></h4>
                            </td>
                        </tr>
                    </table>


            </div>
        </div>
    </section>

</body>

</html>
 