<?php

session_start();

include 'functions.php';

require 'Dbconnection.php';

$conn = Dbconnect();

    if(isset($_POST['submit'])){

        if(isset($_POST['email'])){
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors[] = "<li>Invalid email format</li>";
            }else{
                $email = test_input($_POST['email']);
            }
        }

        if(isset($_POST['question'])){
            $content = test_input($_POST['question']);
        }

        // Insert query
        $query = "INSERT INTO `question`(`id_question`, `content`) VALUES (null,'$content');";

        $conn->query($query);

        $query = "SELECT `id_question` FROM `question`";
        
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) {
            while($row = $result->fetch_assoc()) {
                $id_question = $row['id_question'];
            }
            
        }

        $query = "SELECT `applier_id` FROM `applier` where `status` = 'student'";

         $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) {
            while($row = $result->fetch_assoc()) {
                $applier_id = $row['applier_id'];
            }
            
        }    

        $query = "INSERT INTO `poser_question`(`applier_id`, `id_question`) 
        VALUES ('".$applier_id."','".$id_question."')";

        $conn->query($query);

        header("location: listequestions.php");
    

        $conn->close();

    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Student profile</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada.png">
    </head>

    <body>

        <?php include 'includes/navbar.php'; ?>

        <main>

            <div class="container mb-6">
                <h1 style="text-align: center; margin-top:2%;">Write your question</h1>
                <form id="form" name="form" method="POST">
                        <span>(</span>
                        <span style="color:red;">*</span>
                        <span>) :</span>
                        <span>required fields</span><br/><br/>

                    <fieldset class="form-control">        
                        <div class="form-group">
                            <label for="email" class="col-2 col-form-label">Email:<span style="color:red;"> *</span></label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div><br/>
                        <div class="form-group">
                            <label for="question">Question:<span style="color:red;"> *</span></label><br/>
                            <textarea class="form-control rounded-0" id="question" name="question" placeholder="write your question" required rows="3"></textarea>
                        </div><br/>
                    </fieldset><br/>
                    <input class="btn btn-success" type="submit" value="submit" name="submit">
                    <input class="btn btn-danger" type="reset" value="Reset" style="margin-left:87%;">
                </form>
            </div>
             
            <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:30px;">
                <a role="button" class="btn btn-primary" href="studentProfile.php" style="display:center;">Profile</a>
            </div>
            <!-- rest of main content -->
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