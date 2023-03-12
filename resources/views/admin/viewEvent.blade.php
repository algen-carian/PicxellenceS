<!DOCTYPE html> 
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEWEVENT</title>
    <link rel="icon" type="" href="../assets/style-lp/images/picxellence.png">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> <!-- for boxicons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel = "stylesheet" href = " {{ URL::asset('assets/css/admindashboard.css'); }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body id = "boody">
   
        <!-- side -->
        <div class="sidebar" style = "padding-left: 0;">
        <div class="logo-details">
            <i class='bx bxl-heart-square icon'></i>
            <div class="logo_name"><br><br><br>
                <img src="assets/picxellence.png" alt="ADMIN" width="100" height="100">
                <a href = "/adminlogin" style = "text-decoration: none; color: #fff;">Picxellence</a>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <br><br><br>
        <ul class="nav-list" style = "padding-left: 15px;">
          <!-- <li>
              <i class='bx bx-search' ></i>
             <input type="text" placeholder="Search...">
             <span class="tooltip">Search</span>
          </li> -->
            <li>
            <a href="../sidemenu">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
                <span class="tooltip">Dashboard</span>
            </li>
         
            <li>
                <a href="../Reservation">
                    <i class='bx bx-money' ></i>
                    <span class="links_name">Reservation</span>
                </a>
                <span class="tooltip">Reservation</span>
            </li>
            <li>
                <a href="../adminhistory">
                    <i class='bx bx-laptop' ></i>
                    <span class="links_name">History</span>
                </a>
                <span class="tooltip">History</span>
            </li>
            <li>
                <a href="../adminevent">
                    <i class='bx bx-calendar' ></i>
                    <span class="links_name">Event</span>
                </a>
                <span class="tooltip">Event</span>
            </li>
            <!-- <li>
                <a href="../adminprofile">
                    <i class='bx bx-user-circle' ></i>
                    <span class="links_name">Admin Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li> -->
            <!-- <a href = "../adminlogin">
                <li class="profile">
                    <div class = "text_logout">Log-Out</div>
                    <i class='bx bx-log-out' id="log_out" ></i>
                </li>
            </a> -->
        </ul>
      </div>


      

 
        <section class="service-section" style="padding-left:10%;padding-top:5%;">
          <div class="text_permission">
            <div class="container-fluid" >
                <h2>Reservations</h2>
               
                    <div class="card" style="width: 60%;float:left;padding-bottom:2%;">
                        <div class="card-header">
                           <h3> Details</h3>
                        </div>
                        <div class="card-body">
                            @foreach($Events as $ev)
                            <div>
                                <label for="Name">Name</label>
                                <input  class="form-control" name="Name" type="text" value="{{$ev->fname}} {{$ev->mname}} {{$ev->lname}}" readonly>
                            </div>
                            <div>
                                <label for="Email">Email</label>
                                <input  class="form-control" name="Email" type="text" value="{{$ev->email}}" readonly>
                            </div>
                            <div>
                                <label for="Location">Location of Event</label>
                                <input  class="form-control" name="Location" type="text" value="{{$ev->Address}}" readonly>
                            </div>
                            <div>
                                <label for="Contact">Contact</label>
                                <input  class="form-control" name="Contact" type="text" value="{{$ev->contact}}" readonly>
                            </div>
                            <div>
                                <label for="Alternate">Alternate Contact</label>
                                <input  class="form-control" name="Alternate"type="text" value="{{$ev->alternate}}" readonly>
                            </div>
                            <div>
                                <label for="status">Status</label>
                                <input class="form-control"  name="status" type="text" value="{{$ev->event_status}}" readonly>
                            </div>
                            <div>
                                <label for="data_event">Event Date</label>
                                <input class="form-control"  name="data_event" type="text" value="{{$ev->Event_date}}" readonly>
                            </div>
                            <div>
                                <label for="DoR">Date of Reservation</label>
                                <input  class="form-control" name="DoR" type="text" value="{{$ev->created_at}}" readonly>
                            </div>
                             @endforeach   	
                                	
                        </div>
                    </div>

                    <div class="card" style="width: 30%;float:left;margin-left:1%;">
                        <div class="card-header">
                           <h3>Services</h3>
                        </div>
                        <div class="card-body">
                            <div>
                                <label for="DoR">Type of services:</label>
                                @foreach($services as $serv)
                                    <input  class="form-control" name="service" type="text" value="{{$serv->Service}}" readonly>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </section>

      <script src="js/script.js"></script>

 
</body>
<script src="js/script.js"></script>

<script>
    // alert("Welcome Admin")
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");
 
 
closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});
 
searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}
</script>

</html>