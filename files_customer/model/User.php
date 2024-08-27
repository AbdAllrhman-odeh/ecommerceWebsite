<?php

    require_once("../configration/config.php");

    class user
    {
        private $conn;
        private $name;
        private $email;
        private $password;

        function __construct()
        {
            $db=new dataBase();
            $this->conn=$db->getConnetion();
        }
        function addUser($name,$email,$password)
        {
            $this->name=$name;
            $this->email=$email;
            $this->password = password_hash($password, PASSWORD_BCRYPT);

            $query="INSERT INTO users (name,email,password,type) VALUES(:name,:email,:password,:type)";

            $stmt=$this->conn->prepare($query);

            $stmt->bindParam(':name',$this->name);
            $stmt->bindParam(':email',$this->email);
            $stmt->bindParam(':password',$this->password);
            $stmt->bindValue(':type','customer');

            $stmt->execute();
            
            return $stmt;
        }
    }

?>