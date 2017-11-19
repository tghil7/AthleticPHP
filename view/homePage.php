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
      <script src="../js/Athletic.js"></script>
</head>
<body class="container-fluid home">
                        <div id="myNav">
                                <div id= "siteMenu" class="dropdown">
				  
				   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" ><span  class="glyphicon glyphicon-th-list"></span></button>
					<ul class="dropdown-menu">
                                            <li><a href="homePage.php">Home</a></li>
                                            <li><a href="aboutUs.php">About </a></li>
                                            <li><a href="Diagnostic.php">Diagnostic</a></li>
                                            <li><a href="aboutUs.php#contactBody">Contact </a></li>
					</ul>
                            
				   
				  </div>
                                  <div id="inlineNav" >
                                        <ul class="nav nav-pills">
                                            <li><a href="homePage.php">Home</a></li>
                                            <li><a  href="aboutUs.php" >About</a></li>
                                            <li><a  href="Diagnostic.php">Diagnostic</a></li>
                                            <li><a  href="aboutUs.php#contactBody">Contact</a></li>                
                                        </ul>
                                  </div>
                        </div>
				  
				  <div id="searchSection"  >
                                      <div class="carousel-caption">
				    <p  id="headerWord">Learn about athletic training</p>
                                    <p id="headDetails">Use the diagnostic page to provide a possible diagnostic to your symptoms.<br>
                                        You can also try to search for an athletic term you may not be familiar with <br/>
                                        using the search box below. </p><br/>
                                      </div>
                                    <form action="../controller/index.php" method="post" class="blank">
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
                             
				
   
   		
		 
     <footer class="footer"><small><i>Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
                            webmaster@athletictrainer.com</i></small></footer>		 
</body>
</html>


