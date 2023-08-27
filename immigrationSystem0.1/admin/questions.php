<?php

session_start();

include '../functions.php';

require '../Dbconnection.php';

$conn = Dbconnect();


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin profile - Questions -</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="../images/canada.png">    
    </head>

    <body>

        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-danger">
                <div class="container">
                    <ul class="navbar-nav ms-auto" style="margin:1%;">
                        <li class="nav-item">
                            <a class="nav-link" href="about.php" style="color:white;">About us</a>
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
            <div class="container-fluid">
                <div class="row flex-nowrap">
                    <?php include 'sidebar.php'; ?>
                    <div class="col py-3">
                        <h3 style="text-align:center; margin:10px;">Table of Questions</h3>
                        <table class="table table-bordered" style="text-align:center;">
                            <thead> 
                                <tr>
                                    <th scope="col">Num question</th>
                                    <th scope="col">Question</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM `question` ";
                                    $result = mysqli_query($conn, $query);
                                    while($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>$row[id_question]</td>";
                                        echo "<td>$row[content]</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
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
