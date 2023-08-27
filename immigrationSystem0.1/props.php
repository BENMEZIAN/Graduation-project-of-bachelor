<?php


session_start();

include 'functions.php';

require 'Dbconnection.php';

$conn = Dbconnect();
 //a PHP Super Global variable which used to collect data after submitting it from the form
 if(isset($_POST['submit'])){
   
    $email=test_input($_SESSION['email']); 
 if(isset($_POST['establishment']))
 {
    if(isset($_POST['level']))
    {
        if(isset($_POST['domaine']))
        {
            if(isset($_POST['gdate']))
            {
               
                    $establishment = test_input($_POST['establishment']);
                    $level = test_input($_POST['level']);
                    $domaine = test_input($_POST['domaine']);
                    $gdate = test_input($_POST['gdate']);
                    $query = "INSERT INTO `diplome`(email, etablissement, level ,domaine , dateob ) 
                    VALUES ('$email', '$establishment ',  ' $level', ' $domaine', ' $gdate');";
                    $conn->query($query);



                
            } 
        }  
    }
 }
 if(isset($_POST['establishment2']))
 {
    if(isset($_POST['level2']))
    {
        if(isset($_POST['domaine2']))
        {
            if(isset($_POST['gdate2']))
            {
               
                    $establishment2 = test_input($_POST['establishment2']);
                    $level2 = test_input($_POST['level2']);
                    $domaine2 = test_input($_POST['domaine2']);
                    $gdate2 = test_input($_POST['gdate2']);
                    $query = "INSERT INTO `diplome`(email, etablissement, level ,domaine , dateob ) 
                    VALUES ('$email', '$establishment2 ',  ' $level2', ' $domaine2', ' $gdate2');";
                    $conn->query($query);
                
            } 
        }  
    }
 }
 if(isset($_POST['language']))
 {
    if(isset($_POST['levell']))
    {
       
               
                    $language = test_input($_POST['language']);
                    $levell = test_input($_POST['levell']);

                    $query = "INSERT INTO `languages`(email, language , level  ) 
                    VALUES ('$email', '$language ',  ' $levell');";
                    $conn->query($query);
                
             
         
    }
 }
 if(isset($_POST['language2']))
 {
    if(isset($_POST['levell2']))
    {
       
               
                    $language2 = test_input($_POST['language2']);
                    $levell2 = test_input($_POST['levell2']);

                    $query = "INSERT INTO `languages`(email, language , level  ) 
                    VALUES ('$email', '$language2 ',  ' $levell2');";
                    $conn->query($query);
                
             
         
    }
 }
 

 header("location: studentProfile.php");

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
                            <label for="establishment" class="col-2 col-form-label">Establishment:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="establishment" name="establishment">
                        </div>

                        <div class="form-group">
                            <label for="level" class="col-2 col-form-label">Level:<span style="color:red;"> *</span></label>
                            <select id="level" name="level" class="form-control">
                            <option value="bachelor">bachelor</option>
                                <option value="Licence">Licence</option>
                                <option value="Master">Master</option>
                                <option value="Doctorat(ph.d)">Doctorat(ph.d)</option>
                                <option value="Doctor of Medicine">Doctor of Medicine</option>
                                <option value="Doctor of Pharmacy">Doctor of Pharmacy</option>
                                <option value="Doctor of veterinary medicine">Doctor of veterinary medicine</option>
                                <option value="One-year degree, diploma or certificate from  a university, college, trade or technical school, or other institute">One-year degree, diploma or certificate from  a university, college, trade or technical school, or other institute</option>
                                <option value="Two-year program at a university, college, trade or technical school, or other institute">Two-year program at a university, college, trade or technical school, or other institute</option>
                            </select>
                                
                            
                            
                        </div>
                        <div class="form-group">
                            <label for="domaine" class="col-2 col-form-label">domaine:<span style="color:red;"> *</span></label>
                            <input type="text" class="form-control" id="domaine" name="domaine">
                        </div>
                        <div class="form-group">
                            <label for="gdate" class="col-2 col-form-label"> date of Graduation :<span style="color:red;"> *</span></label>
                            <input type="date" class="form-control" id="gdate" name="gdate">
                        </div>
                        
                        <div id="addeducation"></div>
                        <div class="mb-3">
                        <button type="button" id="education_hide" class="btn btn-primary form-control" onclick=" addeducation()">+</button>
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
                            <label for="language" class="col-2 col-form-label">Language:<span style="color:red;"> *</span></label>
                            <select class="form-control" id="language" name="language">
                               <option value="english">english</option>
                               <option value="french">french</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="levell" class="col-2 col-form-label">Level:<span style="color:red;"> *</span></label>
                            <select  class="form-control" id="levell" name="levell">
                               <option value="A1">A1</option>
                               <option value="A2">A2</option>
                               <option value="B1">B1</option>
                               <option value="B2">B2</option>
                               <option value="C1">C1</option>
                               <option value="C2">C2</option>
                            </select>
                        </div>
                      
                        
                        <div id="addlanguage"></div>
                        <div class="mb-3">
                        <button type="button" id="language_hide" class="btn btn-primary form-control" onclick="addlanguage()">+</button>
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
                
        
         











            </div>
          </main>
        <?php include 'includes/footer.php'; ?>


        <script src="f1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
       <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
      </body>
</html>
