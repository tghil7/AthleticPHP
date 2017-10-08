<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact Us</title>
           <meta name="viewport" content="width = device-width, initial-scale = 1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link type="text/css" rel="stylesheet" href="../style/athletic.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script type ="text/javascript" src="../style/Athletic.js"></script>
     <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Pontano+Sans" rel="stylesheet"> 
   
</head>
    <body id="contactBody" class="container-fluid">
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
            <div id="navigationLink">
            <a href="homePage.php" style="color: black">Home</a>&nsbp;<span class="glyphicon glyphicon-chevron-right"></span>&nsbp;<a href="contactUs.php" style="color: black">Contact Us</a>   
        </div>
        <div id ="contactPage">
              <h4>Main Address:</h4>
              7260 NW Parvin Drive, Kansas City, MO 64116
              <h4>Phone Number:</h4>
              (225)08-00-01-12
               <h4>Contact Us</h4><br />
           <div id="contactForm">
              <form id = "sendMessage" method="get" action="index.php" >
                   <label>First Name: <input type="text" name="firstName" id="firstName" size="25" /></label><br /><br />
                   <label>Last Name: <input type="text" name="lastName" id="lastName" size="25" /></label><br /><br />
                   <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-mail:&nbsp; <input type="text" name="eMail" id="eMail" size="25" /></label><br /><br /><br /><br />
                   <label>Send us a Message below</label><br />
                   <textarea id="commentText" cols="75" rows= "7"></textarea><br /><br /><br />
                   <input type="button" id="Contact" onclick="sendMessage()"  value ="Submit"/>&nbsp;&nbsp;&nbsp;
                  <button id="reset" onclick="reset()">Reset</button>
             </form>
        </div>
          <div id="runner">
               <img src="../images/uniqueRunner1.jpg" class="img-circle" id ="menuImage" style="width: 214px; height: 285px;">
          </div>    
</div>
        
                <footer style="bottom: 0px; padding-left: 50px; text-align: center; padding-top: 5px; clear: both"><p><small><i> Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
    webmaster@athletictrainer.com</i></p></small</footer>
        </div>
    </body>
</html>
