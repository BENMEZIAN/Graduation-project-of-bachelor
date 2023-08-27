<?php


session_start();

include '../functions.php';

require '../Dbconnection.php';

$conn = Dbconnect();
 //a PHP Super Global variable which used to collect data after submitting it from the form    

if(isset($_POST['submit'])){


    // Email validation
    if(isset($_POST['email'])){
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "<li>Invalid email format</li>";
        }else{
            $email = test_input($_POST['email']);
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
    $query = "INSERT INTO `admin`(`id`, `email`, `password`) VALUES (null,'$email','$password');";

     if ($conn->query($query) === TRUE) {
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
        <title>Admin Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="../images/canada.png">
    </head>

    <body data-spy="scroll">

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                <div class="container">
                    <ul class="navbar-nav ms-auto" style="margin:1%;">
                        <li class="nav-item">
                            <a class="nav-link" href="../about.php" style="color:white;">About us</a>
                        </li>
                    </ul>
                    <?php if(!adminLoggedIn()): ?>
                        <div class="d-grid gap-2 d-md-block">
                            <a role="button" class="btn btn-light me-md-2" href="register.php">register</a>
                            <a role="button" class="btn btn-light" href="login.php">login</a>
                        </div>
                    <?php else: ?>
                        <div class="d-grid gap-2 d-md-block">
                            <a role="button" class="btn btn-light me-md-2" href="logout.php">logout</a>
                        </div>
                    <?php endif; ?>
                </div>
            </nav>
        </header>

        <main>
            <div class="container mb-6">
                <h1 style="text-align: center; margin-top:2%;">Admin Register</h1>
                <form id="form" name="form" method="POST">
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

        <?php include '../includes/footer.php'; ?>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    </body>
</html>