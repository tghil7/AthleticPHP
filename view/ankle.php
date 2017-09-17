<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ankle</title>
                <meta name="viewport" content="width = device-width, initial-scale = 1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link type="text/css" rel="stylesheet" href="../style/athletic.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Pontano+Sans" rel="stylesheet">
    </head>
    <body class="container-fluid">
         <div class="container-fluid" id="myTopnav">
           <ul class="nav navbar-nav" >
                  <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="../view/homePage.php">Home</a></li>
               <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="../view/diagnostic.php">Diagnostic</a></li>
               <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="../view/contactUs.php">Contact</a></li>
               <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="../view/aboutUs.php" class="active">About</a></li>
           </ul>

        </div>
        <div id="navigationLink">
            <a href="../view/homePage.php">Home</a><span class="glyphicon glyphicon-chevron-right"></span><a href="../view/ankle.php">Ankle</a>   
        </div>
        
        <div id="diseaseInfo" style="min-width: 300px; height:240px;float:left;">
          <h4>Symptoms:</h4>
          <p>Immediate swell and bruising of the ankle, Severe pain, unstable feeling at the ankle</p>
          <h4>Severity:</h4>
          <p>Variable (3 degrees)</p>
          <h4>Treatment:</h4>
          <p>Rest,Ice, Compression</p>
        </div>
          <div id="video" style="float:right;">
                <iframe  width="370" height="240" style="margin-right: 30px; margin-bottom: 100px;" src="https://www.youtube.com/embed/deQjnm46nWM" frameborder="0" allowfullscreen></iframe>
          </div>    
       
       
               <footer class="footer"><p><small><i> Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
    webmaster@athletictrainer.com</i></p></small</footer>
    </body>
</html>
