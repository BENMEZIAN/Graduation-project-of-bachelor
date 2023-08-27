<?php


session_start();

include 'functions.php';

require 'Dbconnection.php';

$conn = Dbconnect();
 //a PHP Super Global variable which used to collect data after submitting it from the form    

if(isset($_POST['submit'])){

    
     // First name validation
    if(isset($_POST['fname'])){
        if(preg_match("/^([a-zA-Z ]+)$/",$_POST['fname'])){
            $fname = test_input($_POST['fname']);
            $messages[] = "<li>First name is valid</li>";
        }else{
            $errors[] = "<li>First name is invalid</li>";
        }
    }

    // Last name validation
    if(isset($_POST['lname'])){
        if(preg_match("/^([a-zA-Z ]+)$/",$_POST['lname'])){
            $lname = test_input($_POST['lname']);
             $messages[] = "<li>Last name is valid</li>";
        }else{
            $errors[] = "<li>Last name is invalid</li>";
        }
    }

    // Date validation
    if(!empty($_POST['DateOfBirth'])){
        if(isset($_POST['DateOfBirth'])){
            $date = test_input($_POST['DateOfBirth']);
            $messages[] = "<li>Date is valid</li>";
        }  
    }
    // Sex validation
    if(isset($_POST['sex'])){
        $sex = test_input( $_POST['sex']);
    }
    
    
    // Social situation validation
    if(isset($_POST['situation'])){
        $situation = test_input( $_POST['situation']);
    }

    // Status validation
    if(isset($_POST['status'])){
        $status = test_input( $_POST['status']);
    }


    // Email validation 
        
    if(isset($_POST['email']))
    { 
        $sql= mysqli_query($conn, "SELECT * FROM applier WHERE email = '".$_POST['email']."'");
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        {
            $errors[] = "<li>Invalid email format</li>";
        }
        else{ 
        if (mysqli_num_rows($sql))
         { exit('This email address is already used!'); }
         
         else{
            $email = test_input($_POST['email']);
         }
        }
    }


    // Password validation
    if(isset($_POST['password'])){
        $password = test_input($_POST['password']);
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        

        if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
            $errors[] = "<li>Password should be at least 8 characters in length and should include at least one upper case letter, 
                        one number</li>";
        }else{
            $messages[] = "<li>Valid password</li>";
        }
    }


    // Insert query
    $query = "INSERT INTO `applier`(`applier_id`, `lname`, `fname`, `birthday`, `sex`, `social_situation`, `status`, `email`, `password`) 
    VALUES (null,'$lname','$fname','$date','$sex','$situation','$status','$email','$password');";

    if($conn->query($query) === TRUE) {
        header("location: login.php");
    }else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }

    $conn->close();
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada-flag.jpg">
    </head>

    <body data-spy="scroll">

        <?php include 'includes/navbar.php';?>

        <main>
            <div class="container mb-6">
                <h1 style="text-align: center; margin-top:2%;">User Register</h1>
                <form id="form" name="form" method="POST">
                    <fieldset class="form-control">
                        <legend>Personal information</legend> 
                        <span>(</span>
                        <span style="color:red;">*</span>
                        <span>) :</span>
                        <span>required fields</span>

                        <div class="form-group">
                            <label for="fname" class="col-2 col-form-label">First name:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="fname" name="fname">
                        </div>

                        <div class="form-group">
                            <label for="lname" class="col-2 col-form-label">Last name:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="lname" name="lname">
                        </div>
                        
                        <div class="form-group">
                            <label for="DateOfBirth" class="col-2 col-form-label">Birthday:<span style="color:red;"> *</span></label>
                            <input type="date" class="form-control" id="DateOfBirth" name="DateOfBirth">
                        </div>
                        
                        

                        <div class="form-group">
                            <label for="sex" class="col-1 col-form-label">Sex:<span style="color:red;"> *</span></label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="male" value="male">
                                <label class="form-check-label" for="male">male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="sex" id="female" value="female">
                                <label class="form-check-label" for="female">female</label>
                            </div>
                        </div><br/>
                        
                        <div class="form-group">
                            <label for="situation">Social situation:<span style="color:red;"> *</span></label>
                            <select id="situation" name="situation" class="form-control">
                                <option value="married">Married</option>
                                <option value="single">Single</option>
                                <option value="divorced">Divorced</option>
                            </select>
                        </div><br />

                        <div class="form-group">
                            <label for="status">Status:<span style="color:red;"> *</span></label>
                            <select id="status" name="status" class="form-control">
                                <option value="student">Student</option>
                                <option value="employee">Employee</option>
                            </select>
                        </div><br/>
                    </fieldset>
                    <br/><br/>
                   
                    <fieldset class="form-control">
                        <legend>Login information</legend>
                        <span>(</span>
                        <span style="color:red;">*</span>
                        <span>) :</span>
                        <span>Required fields</span>
                        
                        <div class="form-group">
                            <label for="email" class="col-2 col-form-label">Email:<span style="color:red;"> *</span></label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="col-2 col-form-label">Password:<span style="color:red;"> *</span></label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div><br />

                    </fieldset><br/>
                    <input class="btn btn-success" type="submit" value="submit" name="submit">
                    <input class="btn btn-danger" type="reset" value="Reset" style="margin-left:87%;">
                    <br /><br />
                    <?php
	                    if(!empty($errors)){
	                    	echo "<div class='alert alert-danger'>";
                                foreach ($errors as $error) {
                                    echo "".$error."<br>";
                                }
	                    	echo "</div>";
	                    }
                    ?>
                </form>
                <h3 style="text-align: center;">Have you already an account ? <a href="login.php" style="color:red; text-decoration:none;">Login</a></h3>
            </div>
        </main>

        <?php include 'includes/footer.php'; ?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    </body>
</html>