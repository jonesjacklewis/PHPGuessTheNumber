<!DOCTYPE html>
<html lang="en">
        <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jack Jones - Portfolio - Random Code Generator</title>
        <link rel="icon" type="image/x-icon" href="../../assets/img/faviconj.ico?" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet" />
        <link href="style2.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Jack L Jones</span>
                 <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" style="max-width: 100px; max-height: auto;"src="./assets/img/J.png" alt="" /></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Main Site</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="csharp.html">C#</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="java.html">Java</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="python.html">Python</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="vb.html">Visual Basic</a></li>
                    <li class="nav-item"><a style="color:black;" class="nav-link js-scroll-trigger" href="webdesign.html"><strong>Web Design</strong></a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
          
            <hr class="m-0" />
            <!-- Table-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Guess The Number</h2>
                    
                     <?php

$number= $_POST['number_entered'];

$submitbutton= $_POST['submit'];


$randomnumber= mt_rand(1,10);


?>


<form action="" method="POST">
Guess a Number Between 1 and 10: 
<input type="text" name="number_entered" value=''/> <br><br>

Result: 
<?php 
if ($submitbutton){

if (($number > 0) && ($number <11)){
if ($number != $randomnumber)
{
echo "Incorrect guess. The correct number was $randomnumber. Try again";
}
else 
{
echo "$randomnumber is the correct guess. You got it right.";
}
}

}

?>
<br><br>
<input type="submit" name="submit" value="Search"/><br><br>
</form>

                </div>
            </section>
            <hr class="m-0" />
           
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
