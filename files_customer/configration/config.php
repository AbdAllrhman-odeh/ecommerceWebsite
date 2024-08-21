<?php

    class dataBase
    {
        private $hostName;
        private $dbName;
        private $userName;
        private $password;
        private $conn; 

        public function __construct()
        {
            $this->hostName='localhost';
            $this->dbName='ecommerce';
            $this->userName='root';
            $this->password='';

            $db="mysql:host=".$this->hostName.";dbname=".$this->dbName;

            try
            {
                $this->conn=new PDO($db,$this->userName,$this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                // echo("done...");
            }
            catch(PDOException $e)
            {
                echo('Error due to :'.$e->getMessage());
                echo('<br>');
                exit('An error occurred. Please try again later.');
            }
        }

        public function getConnetion()
        {
            return $this->conn;
        }

        public function __destruct()
        {
            $db=null;
            // echo('End of the connection...');
            // echo('<br>');
        }
    }

    // $obj=new dataBase();

?>