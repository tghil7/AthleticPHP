<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Diagnostic</title>
      <meta name="viewport" content="width=device-width, initial-scale = 1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <link type="text/css" rel="stylesheet" href="../style/athletic.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../style/Athletic.js"></script> 
      <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Pontano+Sans" rel="stylesheet">
      <style>
          .footer
          {
           clear: both;
           bottom: 5px; 
           padding-left:250px; 
           padding-right: 150px;
           padding-top: 50px;
           text-align: center;
          }
          
          #injuryCheck
          {
            margin-left: 150px;  
          }
          
          #diagnosticTest
          {
              margin-left: 10px;
          }
          
          #bodyPart 
          {
              margin-right: 200px;
              margin-top: 100px;
              margin-left: 20px;
              margin-bottom: 200px;
          }
          
          body
          {
              margin-left: 25px;
              margin-bottom: 10px; 
              background-image: url('../images/jumpman.jpg') !important;
              background-repeat: no-repeat  !important;   
          }
          
      </style>
    
    </head>
    <body>
        <div id="wrapper" class="container-fluid">
           <div class="container" id="myTopnav" style="background-color:">
               <ul class="nav navbar-nav" >
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="homePage.php" style="color: black;font-weight: bold">Home</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="diagnostic.php" style="color: black;font-weight: bold">Diagnostic</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="contactUs.php" style="color: black;font-weight: bold">Contact</a></li>
                <li style="margin-left: 25px; margin-right: 50px;color: black;"><a href="aboutUs.php" class="active" style="color: black;font-weight: bold">About</a></li>
              </ul>
          </div>
            <div id="navigationLink">
                <a href="homePage.php" style="color: black;font-weight: bold">Home</a><span class="glyphicon glyphicon-chevron-right"></span><a href="diagnostic.php" style="color: black;font-weight: bold">Diagnostic</a>   
            </div >
            <div id="bodyPart">
                <h5>What part of the body is experiencing the condition?(Please select one at a time):</h5><br><br><br>
                <form>
                     <input type="radio" name="part" id="part1" value="Elbow" >Elbow<br>
                      <input type="radio" name="part" id="part2" value="Ankle" >Ankle<br>
                      <input type="radio"  name="part" id="part3" value="Groin" >Groin<br>
                      <input type="radio" name="part" id="part4" value="Thighs" >Thighs<br><br><br>
                      <button type="button" onclick="checkSelected()">Submit</button>
                      
                </form>
            </div>
            
               
            <footer class="footer"><p><small><i> Copyright &copy; <?php echo date('Y')  ?> All rights reserved. The Athletic Trainer.<a href="mailto:webmaster@athletictrainer.com">
    webmaster@athletictrainer.com</i></p></small</footer>
        </div>    
            
         <div class="modal fade" id="myElbowModal1" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">
                                            
                                            <div class="modal-body">
                                                 <p>Pain and tenderness in the bony knob on the outside of your elbow?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="elbowQ1y" class="btn alert-danger" data-dismiss="modal">Yes</a>
                                                  <a href="#" id="elbowQ1n" class="btn alert-success" data-dismiss="modal">No</a>
                                            </div>
                                        </div>    
                                 </div>
         </div>
        
        
        <div class="modal fade" id="myElbowModal2" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Pain around the elbow that  may also radiate into the upper or lower arm?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="elbowQ2y" class="btn alert-danger" data-dismiss="modal" value="Yes">Yes</a>
                                                  <a href="#" id="elbowQ2n" class="btn alert-success" data-dismiss="modal" value="No">No</a>
                                        
                                            </div>
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
        
          <div class="modal fade" id="myAnkleModal1" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Immediate swell and bruising of the ankle?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="ankleQ1y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="ankleQ1n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
        <div class="modal fade" id="myAnkleModal2" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Severe pain within the ankle?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="ankleQ2y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="ankleQ2n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
        <div class="modal fade" id="myAnkleModal3" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Unstable feeling at the ankle?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="ankleQ3y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="ankleQ3n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
         <div class="modal fade" id="myGroinModal1" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Pain and tenderness in the groin and the inside of the thigh?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="groinQ1y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="groinQ1n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
         <div class="modal fade" id="myGroinModal2" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Pain when you bring your legs together?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="groinQ2y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="groinQ2n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
        <div class="modal fade" id="myThighModal1" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Pain in the back of the thigh and lower buttock when walking, straightening the leg, or bending over?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="thighQ1y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="thighQ1n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
        <div class="modal fade" id="myThighModal2" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Sudden and severe pain during exercise, along with a snapping or popping feeling?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="thighQ2y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="thighQ2n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
        <div class="modal fade" id="myThighModal3" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Tenderness and bruising in thigh?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="thighQ3y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="thighQ3n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
            <div class="modal fade" id="myKneeModal1" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Pain in the back of the thigh and lower buttock when walking, straightening the leg, or bending over?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="kneeQ1y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="kneeQ1n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
        <div class="modal fade" id="myKneeModal2" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Sudden and severe pain during exercise, along with a snapping or popping feeling?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="kneeQ2y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="kneeQ2n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
        
        <div class="modal fade" id="myKneeModal3" tabindex="-1" style="margin-left: 450px; margin-right: 300px; margin-top: 200px;">
                                 <div class="modial-dialog modal-sm">
                                       <div class="modal-content">                                        
                                            <div class="modal-body">
                                                 <p>Tenderness and bruising in thigh?</p>
                                            </div>
                                            <div class="modal-footer">
                                                  <a href="#" id="kneeQ3y" class="btn alert-danger" data-dismiss="modal" >Yes</a>
                                                  <a href="#" id="kneeQ3n" class="btn alert-success" data-dismiss="modal">No</a>
                                        
                                            </div>
                                        </div>    
                                 </div>
          </div>
    </body>
</html>
