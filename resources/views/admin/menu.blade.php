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
            <a href="admindashboard">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Dashboard</span>
            </a>
                <span class="tooltip">Dashboard</span>
            </li>
         
            <li>
                <a href="Reservation">
                    <i class='bx bx-money' ></i>
                    <span class="links_name">Reservation</span>
                </a>
                <span class="tooltip">Reservation</span>
            </li>
            <li>
                <a href="adminhistory">
                    <i class='bx bx-laptop' ></i>
                    <span class="links_name">History</span>
                </a>
                <span class="tooltip">History</span>
            </li>
            <li>
                <a href="adminevent">
                    <i class='bx bx-calendar' ></i>
                    <span class="links_name">Event</span>
                </a>
                <span class="tooltip">Event</span>
            </li>
            <li>
                <a href="adminprofile">
                    <i class='bx bx-user-circle' ></i>
                    <span class="links_name">Admin Profile</span>
                </a>
                <span class="tooltip">Profile</span>
            </li>
            <a href = "/adminlogin">
                <li class="profile">
                    <div class = "text_logout">Log-Out</div>
                    <i class='bx bx-log-out' id="log_out" ></i>
                </li>
            </a>
        </ul>
      </div>


      
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
 