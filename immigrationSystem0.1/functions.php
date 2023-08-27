<?php
    function test_input($data){
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}

function isLoggedIn(){

    if(isset($_SESSION['email']) && $_SESSION['password']){
        return true;
    }else{
        return false;
    }
}

function adminLoggedIn(){

     if(!empty($_SESSION['id'])){
        return true;
    }else{
        return false;
    }
}
function isemplyer()
{ $var1=$_SESSION['status'];
  


  if ($var1 == "Employee")
    {
    return true;
}else{
    return false;
}
}

?>