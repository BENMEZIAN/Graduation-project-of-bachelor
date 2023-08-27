<?php

session_start();

include 'functions.php';

require 'Dbconnection.php';

$conn = Dbconnect();

if(isset($_POST['submit'])){


    // Retreive email
    if(isset($_POST['email'])){
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "<li>Invalid email format</li>";
        }else{
            $email = test_input($_POST['email']);
        }
    }

    // Retreive password
    if(isset($_POST['password'])){
        $password = test_input($_POST['password']);
    }

    
    // Select query
    $query = "SELECT * FROM applier WHERE email='".$email."' AND password='".$password."' ";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) {
        while($row = $result->fetch_assoc()) {
            $id = $row['applier_id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $birthday = $row['birthday'];
            $age = $row['age'];
            $sex = $row['sex'];
            $situation = $row['social_situation'];
            $status = $row['status'];
            $email = $row['email'];
            $password = $row['password'];
        }

        $_SESSION['applier_id'] = $id;
        $_SESSION['fname'] = $fname; 
        $_SESSION['lname'] = $lname;
        $_SESSION['birthday'] = $birthday;
        $_SESSION['age'] = $age;
        $_SESSION['sex'] = $sex;
        $_SESSION['situation'] = $situation;
        $_SESSION['status'] = $status;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        
        if($_SESSION['status'] == 'student'){
            header("location: studentProfile.php");
        }elseif($status == "employee"){
            header("location: employeeProfile.php");
        }
    }else{
       header("location: login.php");
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada.png">
    </head>

    <body>

        <?php include 'includes/navbar.php'; ?>

        <main>
            <div class="container mb-6">
                <h1 style="text-align: center; margin-top:2%;">User Login</h1>
                <form id="form" name="form" method="POST">
                    <fieldset class="form-control">
                        <legend>Login information</legend>
                        <span>(</span>
                        <span style="color:red;">*</span>
                        <span>) :</span>
                        <span>required fields</span>
                        
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
                </form>
                <h3 style="text-align: center;">You don't have an account ? <a href="register.php" style="color:red; text-decoration:none;">Register</a></h3>
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