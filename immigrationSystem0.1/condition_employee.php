<?php

session_start();

include 'functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Conditions page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="icon" type="image/x-icon" href="images/canada.png">
    </head>

    <body data-spy="scroll">


        <?php include 'includes/navbar.php';?>
        <?php include 'includes/nave.php';?>


        <main>

            <div class="container-fluid mt-3">
                <h1 style="text-align: center;">Conditions</h1>
                <p style="text-align: center; font-size: 160%;"></p>
            </div><br />

            <div class="container mb-6 ">
                <table class="table table-bordered">
                    <thead> 
                        <tr>
                            <th scope="col">Document</th>
                            <th scope="col">condition</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Diploma</td>
                            <td>Must be: 
                                <li>valid</li> 
                                <li>
                                    translated into english at a translator
                                    (
                                    A certified translation can be provided by any professional translator. The
                                     translator must sign a document assuring that the translation is an accurate 
                                     replica of the original document, and the translation is certified. 
                                     A notarized translation requires a notary public to witness the certification 
                                     process.
                                    ) <br/>
                                    <img src="images/googlemap.jpg">
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>ID photo</td>
                            <td>
                                <li>The frame of the photograph must measure at least 35 mm x 45 mm (1 3/8 in x 1 3/4 in).</li>
                                <li>Photographs must show the head seen from the front with the face in the middle of the photograph, and must include the top of the shoulders.</li>
                                <li>Head size from chin to top should measure between 31 mm (1 1/4 in) and 36 mm (1 7/16 in) overall.</li>
                                <li>Top refers to the top of the head or, if covered by hair or headgear, where the head or skull would be if visible.</li>
                                <li>If the photographs do not meet the above specifications, you will need to provide new ones before your request can be processed.</li>
                                See this
                                <a href="https://www.canada.ca/fr/immigration-refugies-citoyennete/services/demande/formulaires-demande-guides/demande-visa-resident-temporaire-specifications-photographie.html" style="color:red;">
                                    link
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Birth act</td>
                            <td>Must be:
                                <li>valid</li>
                                <li>All the information correct</li>
                                <li>translated into english</li>
                            </td>
                        </tr>
                        <tr>
                            <td>CV</td>
                            <td>Must be written in canadian format
                                (See this 
                                <a href="https://cvexemple.com/cv-canadien/" target="_blank" style="color:red;">
                                    site
                                </a>
                                )
                            </td>
                        </tr>
                        <tr>
                            <td>Passport</td>
                            <td>Must be valid (not expired)</td>
                        </tr>
                        <tr>
                            <td>Work permit</td>
                            <td>Conditions for obtaining the work permit
                                <li>The applier must make sure that the work contract is valid, and the company 
                                    exists and has the right to employ foreign workers... The work contract is in 
                                    the field of your professional experience or in the field of your diploma or 
                                    both...etc. So that your chances are great to get the work permit, but the 
                                    result is not 100% guaranteed.
                                </li>
                                <li>
                                    It is the immigration agent at the Visa Center who decides whether to 
                                    grant you a visa or not. This is the most difficult stage.
                                    Assuming you are granted a visa, there is also a migration agent at 
                                    the airport who can refuse to grant you travel permits. Although the 
                                    possibility of being refused a work permit at the airport is small, 
                                    the possibility exists, and you need to prepare well and convince that you 
                                    are really coming to work.
                                </li>
                                <li>
                                    The reasons for refusing the work permit, the most important of which is
                                    that your professional experience does not make the employment contract 
                                    for me useful for the company.
                                </li>
                                To be lucky to get work permits:
                                <li>
                                    Your professional experience or diploma should be in the same field of the 
                                    employment contract as the company.
                                    To obtain a work permit, but if only the experience requirement or the 
                                    diploma requirement is met, it is sufficient for you to have a chance to 
                                    obtain a PT.
                                </li>
                                <li>
                                    The work contract is in one of the areas that are most required in Canada.
                                </li>
                                <li>
                                    That the company has the right to employ foreigners, meaning there are 
                                    conditions that must be written in the company, for example:
                                    Exceeds the number of company workers. 
                                    This is an approximate example and not real because the calculation is 
                                    complex and varies according to the type, nature and category of work...
                                </li>
                                <li>
                                    That the company is not bankrupt, it is desperate to become bankrupt.
                                </li>
                            </td>
                        </tr>
                       <tr>
                            <td>Hotel reservation</td>
                            <td>See this
                                <a href="https://orniposition.com/comment-soumettre-une-preuve-dhebergement-pour-une-demande-de-visa/" target="_blank" style="color:red;">
                                    guide
                                </a>
                            </td>
                       </tr>
                        <tr>
                            <td>Account with balance</td>
                            <td>see this
                                <a href="https://www.kansaz.in/blog/canada-tourist-visa-document-requirements#:~:text=Funds%20Needed%20for%20a%20Canada,addition%20to%20the%20visa%20fees." target="_blank" style="color:red;">
                                    link
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:7px;">
                <a role="button" class="btn btn-primary me-md-2" href="employeeProfile.php"><i class="fa fa-user" style="margin-right:3px;">
                </i>Profile</a>
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