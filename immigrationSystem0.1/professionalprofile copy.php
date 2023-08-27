<?php


session_start();

include 'functions.php';

require 'Dbconnection.php';

$conn = Dbconnect();
 //a PHP Super Global variable which used to collect data after submitting it from the form
 if(isset($_POST['submit'])){
   
    if(isset($_POST['jtitle'])){
        if(preg_match("/^([a-zA-Z ]+)$/",$_POST['jtitle'])){
            $jtitle = test_input($_POST['jtitle']);
            $messages[] = "<li>job title is valid</li>";
        }else{
            $errors[] = "<li>job title is invalid</li>";
        }
    }
    if(isset($_POST['employern']))
        {
            $employern = test_input($_POST['employern']);
            $messages[] = "<li>First name is valid</li>";
         }else{
                 $errors[] = "<li>First name is invalid</li>";
              }

    if(isset($_POST['workplace'])){
        
            $workplace= test_input($_POST['workplace']);
            $messages[] = "<li>First name is valid</li>";
        }else{
            $errors[] = "<li>First name is invalid</li>";
        
    }
    if(isset($_POST['yexperience'])){
        
            $yexperience = test_input($_POST['yexperience']);
            $messages[] = "<li>First name is valid</li>";
        }else{
            $errors[] = "<li>First name is invalid</li>";
        
    }
    if(isset($_POST['responsibility'])){
        
        $responsibility= test_input($_POST['responsibility']);
        $messages[] = "<li>First name is valid</li>";
    }else{
        $errors[] = "<li>First name is invalid</li>";
    
    }
         
    $email=test_input($_SESSION['email']);
    $query = "INSERT INTO `job`(email, jtitle, employern, workplace, yexperience, responsibility) 
    VALUES ('$email', '$jtitle', '$employern', '$workplace', '$yexperience', '$responsibility');";


if($conn->query($query) === TRUE) {
    header("location: employerprofile.php");
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
        <title>professtionale prfile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada-flag.jpg">
    </head>

    <body data-spy="scroll">

        <?php include 'includes/navbar.php';?>
          <main>
           <div class="container mb-6">
            <h1 style="text-align: center; margin-top:2%;">professtionale prfile</h1>
            <form id="form" name="form" method="POST">
                    
                    <fieldset class="form-control">
                        <legend></legend> 
                        <span>(</span>
                        <span style="color:red;">*</span>
                        <span>) :</span>
                        <span>Edication</span>
                     

                        <div class="form-group">
                            <label for="jtitle" class="col-2 col-form-label">Establishment:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="jtitle" name="jtitle">
                        </div>

                        <div class="form-group">
                            <label for="employern" class="col-2 col-form-label">Level:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="employern" name="employern">
                        </div>
                        <div class="form-group">
                            <label for="workplace" class="col-2 col-form-label">domaine:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="workplace" name="workplace">
                        </div>
                        <div class="form-group">
                            <label for="yexperience" class="col-2 col-form-label"> date of Graduation :<span style="color:red;"> *</span></label>
                            <input type="date" class="form-control" id="yexperience" name="yexperience">
                        </div>
                        
                        <div id="addjob"></div>
                        <div class="mb-3">
                        <button type="button" id="job_hide" class="btn btn-primary form-control" onclick="addjob()">+</button>
                        </div>
                    </fieldset>
                    <br/><br/>
                    <fieldset class="form-control">
                        <legend></legend> 
                        <span>(</span>
                        <span style="color:red;">*</span>
                        <span>) :</span>
                        <span>Languages experience</span>
                     

                        <div class="form-group">
                            <label for="jtitle" class="col-2 col-form-label">Language:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="jtitle" name="jtitle">
                        </div>

                        <div class="form-group">
                            <label for="employern" class="col-2 col-form-label">Level:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="employern" name="employern">
                        </div>
                      
                        
                        <div id="addjob"></div>
                        <div class="mb-3">
                        <button type="button" id="job_hide" class="btn btn-primary form-control" onclick="addjob()">+</button>
                        </div>
                    </fieldset>
                    <br/><br/>
                    
                   
                    <input class="btn btn-success" type="submit" value="submit" name="submit">
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


        <script src="fon.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
      </body>
</html>
