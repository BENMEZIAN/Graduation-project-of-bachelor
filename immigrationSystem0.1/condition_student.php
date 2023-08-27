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
        <?php include 'includes/navs.php';?>


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
                            <td>Baccalaureate diploma (for the students who want to pursue their studies in Bachelor)</td>
                            <td>Must be: 
                                <li>valid</li> 
                                <li>translated into english
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
                            <td>Bachelor diploma (for the students who want to pursue their studies in Master)</td>
                            <td>Must be: 
                                <li>valid</li> 
                                <li>recent</li> 
                                <li>translated into english
                                    (
                                    A certified translation can be provided by any professional translator. The
                                     translator must sign a document assuring that the translation is an accurate 
                                     replica of the original document, and the translation is certified. 
                                     A notarized translation requires a notary public to witness the certification 
                                     process.
                                    ) <br/>
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>Master diploma (for the students who want to pursue their studies in Phd)</td>
                            <td>Must be: 
                                <li>valid</li> 
                                <li>recent</li> 
                                <li>translated into english
                                    (
                                    A certified translation can be provided by any professional translator. The
                                     translator must sign a document assuring that the translation is an accurate 
                                     replica of the original document, and the translation is certified. 
                                     A notarized translation requires a notary public to witness the certification 
                                     process.
                                    ) <br/>
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>University score sheets</td>
                            <td>
                                <li>All of them (you haven't lose any one of them)</li> 
                                <li>the name written in correct form</li>
                                <li>the name same in the diploma</li>
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
                                <a href="https://www.canada.ca/fr/immigration-refugies-citoyennete/services/demande/formulaires-demande-guides/demande-visa-resident-temporaire-specifications-photographie.html">
                                    link
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Birth act</td>
                            <td>Must be:
                                <li>valid</li>
                                <li>All the information correct</li>
                                <li>translated into english
                                    (
                                    A certified translation can be provided by any professional translator. The
                                     translator must sign a document assuring that the translation is an accurate 
                                     replica of the original document, and the translation is certified. 
                                     A notarized translation requires a notary public to witness the certification 
                                     process.
                                    ) <br/>
                                </li>
                            </td>
                        </tr>
                        <tr>
                            <td>Motivation letter</td>
                            <td>Must be written by yourself and by your own style
                                <a href="https://www.indeed.com/career-advice/resumes-cover-letters/motivation-letter#:~:text=A%20motivation%20letter%20is%20a,your%20grades%20or%20a%20resume%20." target="_blank">
                                    examples
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>CV</td>
                            <td>Must be written in canadian format
                                (See this 
                                <a href="https://cvexemple.com/cv-canadien/">
                                    examples
                                </a>
                                )
                            </td>
                        </tr>
                        <tr>
                            <td>Recommendation letter(s)</td>
                            <td>Must be written by your teacher(s)
                                (See this 
                                <a href="https://eforms.com/recommendation-letter/">
                                    examples
                                </a>
                                )
                            </td>
                        </tr>
                        <tr>
                            <td>detailed research plan (for Phd students)</td>
                            <td>Must be written by yourself and by your own style
                                (See this 
                                <a href="https://maze.co/guides/ux-research/plan/">
                                    examples
                                </a>
                                )
                            </td>
                        </tr>
                        <tr>
                            <td>Cover letter (for Phd students)</td>
                            <td>Must be written by yourself and by your own style
                                (See this 
                                <a href="https://www.jobseeker.com/en/cover-letter?gclid=CjwKCAjws8yUBhA1EiwAi_tpES9bL1j9YMJ7O4I7urYS8DSlgKlE02ojFJ4gbtGGFrq48STowb_91BoC0D4QAvD_BwE">
                                    examples
                                </a>
                                )
                            </td>
                        </tr>
                        <tr>
                            <td>IELTS exam certificate with a score defined by the university</td>
                            <td>
                                <li>study english form beginner into advanced (for example: in Algeria at Britsh Council)</li>
                                <li>pass the IELTS exam at that center where you have studied english course</li>
                                See
                                <a href="https://www.britishcouncil.dz/fr">
                                    BritishCouncil
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Passport</td>
                            <td>Must be valid (not expired)</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>


            <div class="d-grid gap-2 col-6 mx-auto" style="margin-top:7px;">
                <a role="button" class="btn btn-primary me-md-2" href="studentProfile.php"><i class="fa fa-user" style="margin-right:3px;">
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