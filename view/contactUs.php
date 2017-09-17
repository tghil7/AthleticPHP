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
        <script  type="text/javascript">
  //<![CDATA[
    function reset() 
    {
        document.getElementById("firstName").value = '';
        document.getElementById("lastName").value = '';
        document.getElementById("eMail").value = '';
    }
    
   
setInterval('displayImage()', 500);
 
var dish = new Array(6);
var curDish = 0;
dish[0] = "uniqueRunner1.jpg";
dish[1] = "uniqueRunner2.jpg";
dish[2] = "uniqueRunner3.jpg";
dish[3] = "uniqueRunner4.jpg";
dish[4] = "uniqueRunner5.jpg";
dish[5] = "uniqueRunner6.jpg";

function displayImage() 
{
    if (curDish == 5)
        curDish = 0;
    else
    {
        curDish++;
         document.getElementById("menuImage").src = "../images/" + dish[curDish];         
    }
}
      
     
   // ]]> 
</script>
<style>
 body
{
   margin-left: 25px;
   margin-bottom: 10px; 
    background-image: url('../images/jumpman.jpg') !important;
    background-repeat: no-repeat  !important;
   
}

#runner
{
    float: right  !important;
}

#contactForm 
{
    float: left  !important;
}




</style>
    
</head>
    <body class="container-fluid">
        <div id="wrapper">
        <div class="container" id="myTopnav">
           <ul class="nav navbar-nav">
                <li style="margin-left: 50px; margin-right: 50px;color: black;"><a href="homePage.php" style="color: black;font-weight: bold">Home</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="diagnostic.php" style="color: black;font-weight: bold">Diagnostic</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="contactUs.php" style="color: black;font-weight: bold">Contact</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="aboutUs.php" style="color: black;font-weight: bold" class="active">About</a></li>
           </ul>
        </div>
            <div id="navigationLink">
            <a href="homePage.php" style="color: black">Home</a><span class="glyphicon glyphicon-chevron-right"></span><a href="contactUs.php" style="color: black">Contact Us</a>   
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
