<!DOCTYPE html>

<html lang="en">
<head>
      <meta name="viewport" content="width =device-width, initial-scale = 1">
      <title>Home</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <link type="text/css" rel="stylesheet" href="../style/athletic.css">
     <script>
         var session;
         $(window).load(function(){
             if(session == undefined){
                 $('#myModal').modal('show');
               session ="started";
           }
         });
         
     </script>
     

</head>
<body class="container-fluid">
         
		          <div id ="myCarousel" class="carousel slide" data-ride ="carousel" >
				  
				  
				        <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class= "active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
		                    			  
				        </ol> 

                              <div class="carousel-inner" role="listbox">
							     <div class="item active" style="width: 100%">
                                                                 <img src = "../images/hoop.jpg" alt="hoop"/>
								 </div>
								 <div class="item" style="width: 100%">
                                                                     <img src = "../images/athletegirl.jpg" alt="runner" />
								 </div>
								 <div class="item" style="width: 100%">
                                                                     <img src = "../images/athletic.JPG" alt="soccer" />
								 </div>
							  </div>
                                                           					  
			      </div>
                             <div class="modal fade" id="myModal" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
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
				  <div id= "siteMenu" class="dropdown">
				  <h5>Menu</h5>
				   <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" ><span  class="glyphicon glyphicon-th-list"></span></button>
							   <ul class="dropdown-menu">
                                                               <li><a href="aboutUs.php">About </a></li>
                                                                <li><a href="Diagnostic.php">Diagnostic</a></li>
                                                                <li><a href="contactUs.php">Contact </a></li>
							  </ul>
                            
				   
				  </div>
				  
				  <div id="searchSection"  style="top: 50%; left: 50%; margin-right: -50%;  transform: translate(-50%, -50%); align-items: center; justify-content: center">
				    <h3 class="carousel-caption" style="display: block; text-align:center; align-items: flex-start">Learn about athletic training</h3>
                                    <form action="../controller/index.php" method="post">
					   <input type="search" id="searchBox" name="action" placeholder="Search Athletic Keyword" style="z-index: 1"> &nbsp; &nbsp;
                                           <button class= "btn btn-default" ><span class="glyphicon glyphicon-search"></span></button>
                                           <input type="hidden" name="site" value="Columbia" />
                                           <input type="hidden" name="client" value="columbia" />
                                           <input type="hidden" name="proxystylesheet" value="columbia2" />
                                           <input type="hidden" name="output" value="xml_no_dtd" />
                                           <input type="hidden" name="filter" value="0" />
                                           
                                    </form>                   
				                  
			      </div>
   
		
		 
            <footer style="bottom: 0px; padding-left: 50px; text-align: center; padding-top: 5px; clear: both"><p><small><i> Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
    webmaster@athletictrainer.com</i></p></small</footer>		 
</body>
</html>


