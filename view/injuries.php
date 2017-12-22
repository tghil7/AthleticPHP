<!DOCTYPE html>

<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
         <meta charset="UTF-8">
        <title>Injuries</title>
      <meta name="viewport" content="width =device-width, initial-scale = 1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link type="text/css" rel="stylesheet" href="../style/athletic.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Pontano+Sans" rel="stylesheet">
      <script src="../js/Athletic.js"></script>
    </head>
    <body class="container-fluid">
       <div id="myNav">
                               <div id= "siteMenu" class="dropdown">
				  
				   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" ><span  class="glyphicon glyphicon-th-list"></span></button>
					<ul class="dropdown-menu">
                                            <li><a href="../view/homePage.php">Home</a></li>
                                            <li><a href="../view/aboutUs.php">About </a></li>
                                            <li><a href="../view/Diagnostic.php">Diagnostic</a></li>
                                            <li><a href="../view/aboutUs.php#contactBody">Contact </a></li>
					</ul>
                            
				   
				  </div>
                                  <div id="inlineNav" >
                                        <ul class="nav nav-pills">
                                            <li><a href="../view/homePage.php">Home</a></li>
                                            <li><a  href="../view/aboutUs.php" >About</a></li>
                                            <li><a  href="../view/Diagnostic.php">Diagnostic</a></li>
                                            <li><a  href="../view/aboutUs.php#contactBody">Contact</a></li>                
                                        </ul>
                                  </div>
              </div>
        <div id="navigationLink">
            <a href="../view/homePage.php">Home</a><span class="glyphicon glyphicon-chevron-right"></span><a href="../view/homePage.php">Injuries</a>   
        </div>
        <div id="myInjuryResult" class="white myBackground">
        <?php
        
          if ($name ==  null){
             echo("No keyword entered. Please go back to the home page to search for a keyword.");   
            }
        
        
       else if (empty($result)){
                  echo ("No match found for ".$name.".   Our database is growing every day, so please check again later for that keyword.<br/>"
                          . "In the meantime, you can search for keywords such as groin, elbow, thighs etc...  ");
                }
                
       else if (is_array($result) || is_object($result))
        {
           foreach ($result as $injury) {  
                echo ("Below are the results of your query:<br><br>  ");
                
        ?>
            <form action="#" method="post" >
                <a href=" <?php echo ("../view/".$injury[3]);?>" class="blackLink"><?php echo($injury[0]);?></a>	
              <br><br>
            </form>
          
         <?php   
              }
              
          }
        
              
        
        
        
        ?>
        </div>
        <div>
            <br/>
            <p><strong>For further search on the web, please try again below:</strong></p><br/>
  <script>
  (function() {
    var cx = '011288881374594038238:aqap6ljnbem';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only></gcse:searchbox-only>
        </div>
               <footer class="footer" ><p><small><i> Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
    webmaster@athletictrainer.com</i></p></small</footer>
    </body>
</html>
