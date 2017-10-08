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
        <div id="myNav">
                               <div id= "siteMenu" class="dropdown">
				  <h6>Menu</h6>
				   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" ><span  class="glyphicon glyphicon-th-list"></span></button>
					<ul class="dropdown-menu">
                                            <li><a href="homePage.php">Home</a></li>
                                            <li><a href="aboutUs.php">About </a></li>
                                            <li><a href="Diagnostic.php">Diagnostic</a></li>
                                            <li><a href="contactUs.php">Contact </a></li>
					</ul>
                            
				   
				  </div>
                                  <div id="inlineNav" >
                                        <ul class="nav nav-pills">
                                            <li><a href="homePage.php">Home</a></li>
                                            <li><a  href="aboutUs.php" >About</a></li>
                                            <li><a  href="Diagnostic.php">Diagnostic</a></li>
                                            <li><a  href="contactUs.php">Contact</a></li>                
                                        </ul>
                                  </div>
              </div>
         <div id="imageTrail">
             <img src="../images/runningnike.jpg" alt="otherRunner" class="aboutImage" >
             <img src="../images/foot1.jpg" class="aboutImage">
             <img src="../images/wrestler.jpg" class="aboutImage">
             <img src="../images/americanfoot.jpg" class="aboutImage">
             <img src="../images/swimmer.jpg" class="aboutImage">
         </div>
        <div id="navigationLink">
            <a href="homePage.php">Home</a><span class="glyphicon glyphicon-chevron-right"></span><a href="aboutUs.php">About Us</a>   
        </div>
        <p id="description"> This website is the idea of a certified athletic trainer  who wanted to have a quick reference handy in order to 
        remind herself of athletic training notions she may have forgotten.We started working on the project during our free time. 
         Please free to send us any comments or proposed corrections.</p>
    
        
        
        <p id="demo"></p>
       <div id="mapholder" onload="getLocation()"></div>

                <footer class="footer"><p><small><i> Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
    webmaster@athletictrainer.com</i></p></small</footer>
     </div>
    </body>
</html>