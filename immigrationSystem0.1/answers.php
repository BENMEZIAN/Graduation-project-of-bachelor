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
        <title> Answers </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada.png">    
    </head>

    <body>

        <?php include 'includes/navbar.php'; ?>

        <main>

            <div class="container-fluid">
                <h3 style="text-align:center; margin:10px;">Table of Answers</h3>
                    <table class="table table-bordered" style="text-align:center;">
                        <thead> 
                            <tr>
                                <th scope="col">Num answer</th>
                                    <th scope="col">answer</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
                                    $query = "SELECT * FROM `answer`";
                                    $result = mysqli_query($conn, $query);
                                    
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>$row[id_answer]</td>";
                                        echo "<td>$row[content]</td>";
                                        echo "</tr>";
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>

                <?php if(isLoggedIn()): ?>
                    <?php if($_SESSION['status'] == 'student'):?>
                        <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:7px;">
                            <a role="button" class="btn btn-primary me-md-2" href="studentProfile.php"><i class="fa fa-user" style="margin-right:3px;">
                        </i>Profile</a>
                        </div>   
                    <?php elseif($_SESSION['status'] == 'employee'):?>
                        <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:7px;">
                            <a role="button" class="btn btn-primary me-md-2" href="employeeProfile.php"><i class="fa fa-user" style="margin-right:3px;">
                        </i>Profile</a>
                        </div>   
                    <?php endif;?> 
                <?php endif; ?>

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
