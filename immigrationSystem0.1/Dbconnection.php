<?php
    
    function Dbconnect(){
        
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "immigrate_sys";  

        $con = mysqli_connect($host, $username, $password, $dbname);

        if($con){
            return $con;
        }else{
            die("Connection failed: " . mysqli_connect_error());
        }
    }
?>