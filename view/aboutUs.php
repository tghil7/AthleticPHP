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
      <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Pontano+Sans" rel="stylesheet">
      <script src="../js/Athletic.js"></script>
    </head>
    <body class="container-fluid">
        <div id="wrapper">
        <div id="myNav">
                               <div id= "siteMenu" class="dropdown">
				  
				   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" ><span  class="glyphicon glyphicon-th-list"></span></button>
					<ul class="dropdown-menu">
                                            <li><a href="homePage.php">Home</a></li>
                                            <li><a href="aboutUs.php">About </a></li>
                                            <li><a href="Diagnostic.php">Diagnostic</a></li>
                                            <li><a href="#contactBody">Contact </a></li>
					</ul>
                            
				   
				  </div>
                                  <div id="inlineNav" >
                                        <ul class="nav nav-pills">
                                            <li><a href="homePage.php">Home</a></li>
                                            <li><a  href="aboutUs.php" >About</a></li>
                                            <li><a  href="Diagnostic.php">Diagnostic</a></li>
                                            <li><a  href="#contactBody">Contact</a></li>                
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
            <div id="aboutUsNote" class="pageText">
        <p id="description"> This website is the idea of a certified athletic trainer  who wanted to have a quick reference handy in order to 
        remind herself of athletic training notions she may have forgotten.We started working on the project during our free time. The certified athletic
        trainer is now pursuing other career opportunities in physical therapy, but we have decided to continue to work on improving the quality of the
        information displayed on this website.<br/>
        I believe your input will be very helpful in the purpose of providing quality information for other individuals just starting in
        the field of sports medicine and physical therapy. 
         Please feel free to send us any comments or proposed corrections by using the contact box. We truly appreciate your help.</p>
            </div>    
     </div>
        <section id="contactBody" class="white">  
        <div id ="contactPage">
              <h4>Main Address:</h4>
              7260 NW Parvin Drive, Kansas City, MO 64116
              <h4>Phone Number:</h4>
              (225)08-00-01-12
               <h4>Contact Us</h4><br />
           <div id="contactForm">
              <form id = "sendMessage" method="https://formspree.io/tghil7@aol.com" action="index.php" >
                   <label>First Name: <input type="text" name="firstName" id="firstName" size="25" /></label><br /><br />
                   <label>Last Name: <input type="text" name="lastName" id="lastName" size="25" /></label><br /><br />
                   <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-mail:&nbsp; <input type="text" name="_replyto" id="eMail" size="25" /></label><br /><br /><br /><br />
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
        
                <footer class="footer"><small><i>Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
                            webmaster@athletictrainer.com</i></small></footer>
          
      </section>
        
    </body>
</html>