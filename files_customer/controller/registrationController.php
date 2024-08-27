<?php

    //session start
    session_start();
    
    //DB
    require_once('../configration/config.php');
    //MODEL
    require_once('../model/User.php');

    function checkInput($str)
    {
        $str=trim($str);
        $str=htmlspecialchars($str);

        return $str;
    }

    //form submtied
    if($_POST)
    {
       $name=$_POST['name'];
       $email=$_POST['email'];
       $password=$_POST['password'];

       //check input
       $name=checkInput($name);
       $email=checkInput($email);
       $password=checkInput($name);

        $flag=false;

       if(empty($name))
       {
            $flag=true;
            $_SESSION['nameMsg']="Empty Name";
       }
       
       if(empty($email))
       {
            $flag=true;
            $_SESSION['emailMsg']="Empty Email";
       }
        
       if(empty($password))
       {
            $flag=true;
            $_SESSION['passwordMsg']="Empty Password";
       }

        if($flag)
        {
            //one or more fileds are empty
            header("Location:../views/registration.php");
            exit();
        }

        //check if the user alredy exists

        //add the user
        $user=new user();
        $result=$user->addUser($name,$email,$password);
        
        if($result)
        {
            //all good
            header("Location:../views/login.php");
            exit();
        }
    }
?>