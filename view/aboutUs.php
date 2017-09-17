<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>About Us</title>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link type="text/css" rel="stylesheet" href="../style/athletic.css">
      <script type ="text/javascript" src="../style/Athletic.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Pontano+Sans" rel="stylesheet">
    </head>
    <body class="container-fluid">
        <div id="wrapper">
        <div id="myTopnav" style="padding-right: 300px" >
           <ul class="nav navbar-nav" >
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="homePage.php" style="color: black;font-weight: bold">Home</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="diagnostic.php" style="color: black;font-weight: bold">Diagnostic</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="contactUs.php" style="color: black;font-weight: bold">Contact</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="aboutUs.php" class="active" style="color: black;font-weight: bold">About</a></li>
           </ul>
        </div>
         <div id="imageTrail">
             <img src="../images/runningnike.jpg" alt="otherRunner" class="aboutImage" >
             <img src="../images/foot1.jpg" class="aboutImage">
             <img src="../images/wrestler.jpg" class="aboutImage">
             <img src="../images/americanfoot.jpg" class="aboutImage">
             <img src="../images/swimmer.jpg" class="aboutImage">
         </div>
        <div id="navigationLink">
            <a href="homePage.php" style="color: black;font-weight: bold">Home</a><span class="glyphicon glyphicon-chevron-right"></span><a href="aboutUs.php" style="color: black;font-weight: bold">About Us</a>   
        </div>
        <p id="description" style ="text-align: center; margin-left:75px; margin-right: 50px; margin-top: 35px; margin-bottom: 150px;  "> This website is the idea of a certified athletic trainer  who wanted to have a quick reference handy in order to 
        remind herself of athletic training notions she may have forgotten.We started working on the project during our free time. 
         Please free to send us any comments or proposed corrections.</p>
    
        </div>
        
        <p id="demo"></p>
       <div id="mapholder" onload="getLocation()"></div>

                <footer class="footer"><p><small><i> Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
    webmaster@athletictrainer.com</i></p></small</footer>
    </body>
</html>