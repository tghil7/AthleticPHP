<!DOCTYPE html>

<html lang="en">
<head>
      <meta name="viewport" content="width =device-width, initial-scale = 1">
      <title>Home</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link type="text/css" rel="stylesheet" href="../style/athletic.css">
      <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Pontano+Sans" rel="stylesheet">
      <script src="../style/Athletic.js"></script>
</head>
<body class="container-fluid">
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
				  
				  <div id="searchSection"  >
				    <h3 class="carousel-caption">Learn about athletic training</h3>
                                    <form action="../controller/index.php" method="post">
					   <input type="search" id="searchBox" name="action" placeholder="Search Athletic Keyword" > &nbsp; &nbsp;
                                           <button class= "btn btn-default" ><span class="glyphicon glyphicon-search"></span></button>
                                           
                                    </form>                   
				                  
			      </div>
      
		          <div id ="myCarousel" class="carousel slide" data-ride ="carousel" >
				  
				  
				        <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class= "active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
		                    			  
				        </ol> 

                              <div class="carousel-inner" role="listbox">
							     <div class="item active">
                                                                 <img src = "../images/hoop.jpg" alt="hoop" class="mainImage"/>
								 </div>
								 <div class="item">
                                                                     <img src = "../images/athletegirl.jpg" alt="runner" class="mainImage" />
								 </div>
								 <div class="item">
                                                                     <img src = "../images/athletic.JPG" alt="soccer" class="mainImage" />
								 </div>
							  </div>
                                                           					  
			      </div>
                             <div class="modal fade" id="myModal" tabindex="-1">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">
                                            <div class="modal-header">
                                                <a class="close" data-dismiss="modal">×</a>
                                                <h3>Warning!</h3>
                                            </div>
                                            <div class="modal-body">
                                                 <p>This website is just a student project on Web development. I do not own the pictures displayed.
                                                  It should not be used as a complete reference to diagnose athletic injuries.</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" class="btn alert-success" data-dismiss="modal">Close</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
                             </div>
				
   
   		
		 
    <footer class="footer"> Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<br><a href="mailto:webmaster@athletictrainer.com">
    webmaster@athletictrainer.com</footer>		 
</body>
</html>


