<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_account']))
{
    $users_id = mysqli_real_escape_string($con, $_POST['delete_account']);

    $query = "DELETE FROM students WHERE id='$users_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Dentist Account Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = " Dentist Account Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}


?>
