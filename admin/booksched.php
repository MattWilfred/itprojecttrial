<!DOCTYPE html>
<html lang=e n dir="ltr">

<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bookcss.css">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <meta charset="UTF-8">
    <meta name="description" content="Admin Dental Clinic Web Page">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
	
    <title>Dra Marites Cruz Dental Clinic Website- TESTING</title>

</head>

<body>
    <nav>

        <header>
            <div class="logo"> <img src="logo dental.png" alt="dental logo"></div>
            Cruz Dental Clinic
        </header>


        <ul>

             <li>
                <a href="index.html">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>
            </li>

            <li>
                <a href="#" class="sched-btn">
                    <i class="fa-solid fa-calendar-days"></i> Schedule
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="sched-show">
                    <li><a href="calendar.html">Calendar</a></li>
                    <li><a href="ScheduleList.html">Schedule List</a></li>
                </ul>
            </li>

            <li>
                <a href="#" class="acct-btn">
                    <i class="fa-solid fa-user-group"></i> Accounts
                    <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="acct-show">
                    <li><a href="#">Dentist</a></li>
                    <li><a href="patient.html">Patients</a></li>
                    <li><a href="#">Administrator</a></li>
                </ul>
            </li>

            <li>
                <a href="#about"> <i class="fa-solid fa-money-bill-wave"></i> Billing </a>
            </li>
            <li><a href="announcement.html"><i class="fa-solid fa-bullhorn"></i> Announcements </a></li>
        </ul>
        

        <div class="logout">
            <li><a href="#logout"> <i class="fa-solid fa-right-from-bracket"></i> Logout </a></li>
            
        </div>
       
    </nav>

    <div class="body_content">
        <h1> Book Schedule</h1>
        <br>
        <!--For Spacing only-->
        <div class="spacing"></div>

        <h3> Select appointment type </h3>
        <div class="treatment">
            <ul>
                <li>
                  <input type="checkbox" id="myCheckbox1" />
                  <label for="myCheckbox1"><img src="treatment-images/cleaning.jpg" /></label>
                </li>
                <li>
                  <input type="checkbox" id="myCheckbox2" />
                  <label for="myCheckbox2"><img src="treatment-images/dentures.jpg" /></label>
                </li>
                <li>
                  <input type="checkbox" id="myCheckbox3" />
                  <label for="myCheckbox3"><img src="treatment-images/tooth extract.png" /></label>
                </li>

                <li id=>
                    <input type="checkbox" id="myCheckbox4" />
                    <label for="myCheckbox4"><img src="treatment-images/cleaning.jpg" /></label>
                  </li>
                  <li>
                    <input type="checkbox" id="myCheckbox5" />
                    <label for="myCheckbox5"><img src="treatment-images/dentures.jpg" /></label>
                  </li>
                  <li>
                    <input type="checkbox" id="myCheckbox6" />
                    <label for="myCheckbox6"><img src="treatment-images/tooth extract.png" /></label>
                  </li>
            </ul>
        </div>

        <!--Calendar-->
        
        <h3> Select a Date </h3>
        
        <div class="flex-container">
            <div class="calen">
        
                <form>    
                    <div id="datepicker"></div>
                </form>
                     <!--Configure Calendar below-->
                    <script>
                
                         $(function() {
                            $("#datepicker").datepicker({
                                width: '300px',
                                height: '100px'
                            });
                        });
                    </script>
    
            </div>

            <section>
           
             <section id="select-user">
                   <h4>Select User</h4>
                  <input type="text" id="user" name="user" placeholder="Choose user" disabled>
                  <button id="user-btn"><i id="user-icon" class="fa-solid fa-user"></i></button>
                  
               </section>
               
            <div class="spacing"></div>
               <!--Time Options-->
             <div class="time111">
                    <h2>Select Available Schedule</h2>      
                    <div class="column1">
                        <td>
                        <input type="radio" id="time1"  disabled name="time" value="7:00">
                        <label for="time1" id="disabled">07:00 am - 08:00 am</label>      
                        </td>

                        <td>
                        <input type="radio" id="time2" name="time" value="8:00">
                        <label for="time2">08:00 am - 09:00 am</label>
                        </td>

                        <td>
                        <input type="radio" id="time3" name="time" value="10:00">
                        <label for="time3">10:00 am - 11:00 am</label>
                        </td>
             
                        <td>
                        <input type="radio" id="time4" name="time" value="11:00">
                        <label for="time4">11:00 am - 12:00 pm</label> 
                        </td>
                    </div>  
                 
                 <div class="column2">
                        <td>
                        <input type="radio" id="time5" name="time" value="13:00">
                        <label for="time5">01:00 pm - 02:00 pm</label>
                        </td>

                        <td>
                        <input type="radio" id="time6" name="time" value="13:00">
                        <label for="time6">02:00 pm - 03:00 pm</label> 
                        </td>
                
                        <td>
                        <input type="radio" id="time7" name="time" value="13:00">
                        <label for="time7" id="disabled">03:00 pm - 04:00 pm</label> 
                        </td>
                 </div>  
               
                 
                 </div>

               </div>
        
        <section>
            <h3>Select Dentist</h3>
            
            <div id="dentist-btn">
                <div class="flex-container">
                    
                    <input type="radio" id="Dr1" name="Dr" value="">
                    <label for="Dr1"><i id="dr-icon" class="fa-solid fa-user"></i>Dr. Arellano Walang-Ngipin</label>

                   
                    <input type="radio" id="Dr2" name="Dr" value="">
                    <label for="Dr2"> <i id="dr-icon" class="fa-solid fa-user"></i>Dr. Klyde Pustiso</label>
                </div>
            </div>
        </section>

       
     </div>




 <!--
        <section id="button">
            <button id="add-event">Add Event</button>
            <button id="add-appoint">Add Appointment</button>
        </section>
        -->




        <!--MODAL DISPLAY-->
            <!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
        <div id="text">
            <br>
            <h1>Select User</h1>
            <p>list of user</p>

        </div>
    </div>
  
  </div>
    
  <!--SCRIPT FOR MODAL-->
  <script>
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("user-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>
    


    <!--Script for schedule menu-->
     
    <script>
        $('.sched-btn').click(function() {
            $('nav ul .sched-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.acct-btn').click(function() {
            $('nav ul .acct-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>

</body>
