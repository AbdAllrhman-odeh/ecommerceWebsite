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

    function checkLength($email,$password)
    {
        $minLengthEmail=7;
        $maxLengthEmail=20;
        
        $minLengthPassword=5;
        $maxLengthPassword=20;
        
        $flag=false;

        if(strlen($email)<$minLengthEmail)
        {
            //email less than the MIN
            $flag=true;
            $_SESSION['minEmailLengthMsg']="The Email should be more than ".$minLengthEmail." characters";
        }
        
        if(strlen($email)>$maxLengthEmail)
        {
            //email more than the MAX
            $flag=true; 
            $_SESSION['maxEmailLengthMsg']="The Email should be less than ".$maxLengthEmail." characters";
        }

        if(strlen($password)<$minLengthPassword)
        {
            //password less than the MIN
            $flag=true;
            $_SESSION['minPasswordLengthMsg']="The Password should be more than ".$minLengthPassword." characters";
        }

        if(strlen($password)>$maxLengthPassword)
        {
            //password more than the MAX
            $flag=true;
            $_SESSION['maxPasswordLengthMsg']="The Password should be less than ".$maxLengthPassword." characters";
        }

        if($flag)
        {
            header("Location:../views/registration.php");
            exit();
        }
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
       $password=checkInput($password);

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
        
        //chek the length of the 'email' 'password' fildes
        checkLength($email,$password); 

        //check if the user alredy exists
        $user=new user();
        if($user->checkUserExists($email))
        {
            //user exists
            $_SESSION['existsMsg']="The email alredy exists";
            header("Location:../views/registration.php");
            exit();
        }

        //add the user
        $result=$user->addUser($name,$email,$password);
        
        if($result)
        {
            //all good
            header("Location:../views/login.php");
            exit();
        }
    }
?>