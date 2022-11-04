<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Cruz ental Clinic</title>
    
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head> 

<body>
<nav>
<header>
    <div class="logo"> <img src="../logo dental.png" alt="dental logo"></div>
    Cruz Dental Clinic
</header>


<ul>

     <li>
        <a href="../index.html">
            <i class="fa-solid fa-house"></i> Dashboard
        </a>
    </li>

    <li>
        <a href="#" class="sched-btn">
            <i class="fa-solid fa-calendar-days"></i> Schedule
            <span class="fas fa-caret-down first"></span>
        </a>
        <ul class="sched-show">
            <li><a href="#">Calendar</a></li>
            <li><a href="#">Schedule List</a></li>
        </ul>
    </li>

    <li>
        <a href="#" class="acct-btn">
            <i class="fa-solid fa-user-group"></i> Accounts
            <span class="fas fa-caret-down second"></span>
        </a>
        <ul class="acct-show">
            <li><a href="../admin/DoctorAccont/index.php">Dentist</a></li>
            <li><a href="#">Patients</a></li>
            <li><a href="../admin/AdminAccount/index.php">Administrator</a></li>
        </ul>
    </li>

    <li>
        <a href="#"> <i class="fa-solid fa-money-bill-wave"></i> Billing </a>
    </li>
    <li><a href="../announcement.html"><i class="fa-solid fa-bullhorn"></i> Announcements </a></li>
</ul>


<div class="logout">
    <li><a href="../billing.html"> <i class="fa-solid fa-right-from-bracket"></i> Logout </a></li>
    
</div>
</nav>
<div class="body_content">
       
    <div class="header">
    <br>
    <br>
    <br> <!--Header Text-->
              <h4><b> <font size="+5.5">Patient Billing </font></b></h4>
           
                <!-- Add Transaction Buttobn -->
                <div class="search-box">
                    <input class= "search-txt" type="text" name="" placeholder="">
                         <a class="search-btn"href="#">
                            <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                </div>
<!-- Add Transaction Buttobn -->      
               
               <div class="container mt-5">
        <button type="button" class="fa-solid fa-money-bill-1-wave" data-bs-toggle="modal" data-bs-target="#myModal">Add New Transaction</button>            
        <br>
        <br>
       
        
        <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add new Transaction</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                    <!-- downlist choose patient -->
                        <div class="create">   
                  <div class="creates">
                    <select id="dropdown" name="department" class="dropdown">
                    <option  value>Select Patient</option>
                    <option value="admin">1</option>
                    <option value="dentist">2</option>
                    <option value="patient">3</option>
                    <option value="receptionist">4</option>
                    </select>
                    </div>  
                    </div> <br><br>
                    <button type="button" class="AddTransaction">Add New Transaction</button>
    
           <!-- downlist choose patient end-->
        
                          <table>
                        <tr>
                         <th>Date</th>
                        <th>Prescription Description</th>
                        <th>Price Rate</th>
                    </tr>
                    </table>
                   
                          

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
           
         </div>    
       
  
    </div>

    <!-- Billing List Start -->
        <div class="col-xs-1 center-block" style="text-align:center;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Treatment</th>
                                        <th>Total Payment</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $query = "SELECT * FROM billing";
                                        $query_run = mysqli_query($con, $query);
    
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $cruzdentaldatabase)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $cruzdentaldatabase['patient_name']; ?></td>
                                                    <td><?= $cruzdentaldatabase['Treatment']; ?></td>
                                                    <td><?= $cruzdentaldatabase['payment']; ?></td>
                                                    <td><?= $cruzdentaldatabase['status']; ?></td>
                                                   
                                                    <td>
                                                         <!-- Billing List Action Buttons -->
                                                        <a href="../patient-referral.html?id=<?= $cruzdentaldatabase['id']; ?>" class="btn btn-info btn-sm">View</a>
                                                        <a href="student-edit.php?id=<?= $student['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                        <form action="code.php" method="POST" class="d-inline">
                                                            <button type="submit" name="delete_cruzdentaldatabase" value="<?=$cruzdentaldatabase['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            echo "<h5> No Record Found </h5>";
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>
    
                    </div>
                </div>
            </div>
        </div>  
         <!-- Billing List end -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>

      </body>

</html>