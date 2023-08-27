<?php

session_start();

include 'functions.php';

require 'Dbconnection.php';

$conn = Dbconnect();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Employee profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada.png">
    </head>

    <body>
        

        <?php include 'includes/navbar.php'; ?>
        <?php include 'includes/nave.php';?>
        
     
        <main>
           <div class="container-fluid mt-3 mb-5">
                <div class="container mb-6">
                    <h1 style="text-align:center;">Welcome to your profile : <?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></h1>
                </div>
            </div>

            <div class="container mb-6 ">
                <div class="row">
                  <div class="d-flex align-items-start flex-column">  
                    <div class="card" style="width:50%; padding:1px;  float:left; ">
                        <div class="card-header" style="text-align:center;">
                            Your personal information
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">First Name : <?php echo $_SESSION['fname']; ?></li>
                            <li class="list-group-item">Last name : <?php echo $_SESSION['lname']; ?></li>
                            <li class="list-group-item">Date of birth : <?php echo $_SESSION['birthday']; ?></li>
                            <?php
                               $dateOfBirth =  $_SESSION['birthday'];
                                $today = date("Y-m-d");
                                 $diff = date_diff(date_create($dateOfBirth), date_create($today));
                                 
                                   ?>
                            <li class="list-group-item">Age : <?php echo $diff->format('%y') ?></li>
                            <li class="list-group-item">Sex : <?php echo $_SESSION['sex']; ?></li>
                            <li class="list-group-item">Social situation : <?php echo $_SESSION['situation']; ?></li>
                            <li class="list-group-item">Status : <?php echo $_SESSION['status']; ?></li>
                            <li class="list-group-item">Email : <?php echo $_SESSION['email']; ?></li>
                        </ul>
                    </div>
                    <div class="card" style="width:50%; padding:1px;  float:left; ">
                        <div class="card-header" style="text-align:left;">
                            Your Professional experience information
                        </div>
                        <?php
                                    $query = "SELECT * FROM `job` WHERE email = '".$_SESSION['email']."' ";
                                    $result = mysqli_query($conn, $query);
                                    $x=1;
                                    while($row = $result->fetch_assoc()) 
                                    {echo " <ul> <legend>Professional experiencee n°$x:</legend>
                                      <li > job title ::$row[jtitle] </li>
									  <li > employer name:$row[employern] </li>
									  <li > workplace:$row[workplace] </li>
									  <li > Years of experience :$row[yexperience] </li>
									  <li > Responsibility :$row[responsibility] </li>
                                    </ul> "; 
                                       $x++;									
                                    }
                        ?>
                    </div>  
                    <div class="card" style="width:50%; padding:12px;  float:left;  clear: left ">
                        <div class="card-header" style="text-align:left;">
                            Your education 
                        </div>
                        <?php
                                    $query = "SELECT * FROM `diplome` WHERE email = '".$_SESSION['email']."' ";
                                    $result = mysqli_query($conn, $query);
                                    $x=1;
                                    while($row = $result->fetch_assoc()) 
                                    {echo " <ul> <legend>Diplome n°$x:</legend>
                                      <li > Establishment :$row[etablissement] </li>
									  <li > level:$row[level] </li>
									  <li > domaine:$row[domaine] </li>
									  <li > date of Graduation :$row[dateob] </li>
                                    </ul> "; 
                                       $x++;									
                                    }
                       ?>
                    </div> 
                    <div class="card" style="width:50%; padding:12px;  float:left;  clear: left ">
                        <div class="card-header" style="text-align:left;">
                            Languages you speak 
                        </div>
                        <?php
                                    $query = "SELECT * FROM `languages` WHERE email = '".$_SESSION['email']."' ";
                                    $result = mysqli_query($conn, $query);
                                    
                                    while($row = $result->fetch_assoc()) 
                                    {echo " <ul >
                                      <li >$row[language] level:$row[level] </li>
                                    </ul> ";    
                                    }
                         ?>

                   
                    
                    </div>
                   
                    

                    <div class="d-flex align-items-end flex-column"  style="padding:-3px;text-align:justify">
                       
                        <div class="p-2" style="margin-top:15px;">
                            <a role="button" class="btn btn-primary" href="professionalprofile.php" style="display:center;">edit professional profile</a>
                        </div>
                       
                </div>
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