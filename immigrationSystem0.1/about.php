<?php

session_start();

include 'functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>About us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada.png">
    </head>

    <body data-spy="scroll">
        
        <?php include 'includes/navbar.php';?>

        <main>

            <div class="container-fluid mt-3">
                <h1 style="text-align: center;">About us</h1>
                <p>
                There are a lot of reasons which make people left their own country and decide to move on to another country. Some of them move to get a good education, whereas others seek for a profitable job, and there is another type want just to start a new life. Moving on to a foreign country it’s by itself a new challenge.
                The most of Algerians who want to immigrate abroad, the lack of information is a big obstacle even the existence of social media networks which is a full source of information.  To solve that problem, we are developing this website about the immigration procedures for Algerian Appliers only whatever their backgrounds; Students or Workers.
                We will dive into the whole process from the beginning to the last step, where we put on all our knowledge about the immigration, which we give all the necessary tests and orientations fitted to any profile.
                </p>
            </div>

            <div class="container mb-6" align="center">
                ​​​​<video width="350" height="350" controls>
                    <source src="audio/abouts us_video.mp4" type="video/mp4">
                </video>
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
                <?php endif;?>
                <div class="container d-flex justify-content-center py-5">
                <A HREF=http://www.usthb.dz/nouv_page.php ? name=USTHB &
                 ville=Alger> Cliquer ici </A>
                </div>
            
        </main>

        <?php include 'includes/footer.php';?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>    
    </body>
</html>