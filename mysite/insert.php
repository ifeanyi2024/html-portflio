<?php

    require_once("connection.php");

    if(isset($_POST['submit']))
    {
        if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['message']))
        {
            echo ' Please Fill in the Blanks ';
        }
        else
        {
            
            $User_fname = $_POST['fname'];
            $User_lname = $_POST['lname'];
            $User_email = $_POST['email'];
            $User_message = $_POST['message'];

            $query = " insert into contact (fname, lname,email,message) values('$User_fname','$User_lname','$User_email','$User_message')";
            $result = mysqli_query($con,$query);

            if($result)
            {
                header("location:view.php");
            }
            else
            {
                echo '  Please Check Your Query ';
            }
        }
    }
    else
    {
        header("location:index.php");
    }



?>