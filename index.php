<?php
 
    if(isset($_POST['btn-send']))
    {
       
       $Email = $_POST['Email'];
       $password= $_POST['password'];
       $Msg = $_POST['msg'];
 
       if( empty($Email) || empty($password) )
       {
           header('location:index.php?error');
       }
       else
       {
           $to = "s.khan1267.sk@gmail.com";
 
           if(mail($to,$Subject,$Msg,$Email))
           {
               header("location:index.php?success");
           }
       }
    }
    else
    {
        header("location:index.php");
    }
?>