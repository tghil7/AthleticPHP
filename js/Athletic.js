/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 function checkSelected(){
              if((document.getElementById("part1").checked)=== true){
                showElbowQuestions();
                }
              else if ((document.getElementById("part2").checked)=== true){
                showAnkleQuestions();  
              }
             else if ((document.getElementById("part3").checked) === true){
                 showGroinQuestions();
             }
             
             else if ((document.getElementById("part4").checked) === true){
                 showThighQuestions();
             }
             
              
 }
         
function showElbowQuestions(){
    $(document).ready(function(){          
           $('#myElbowModal1').modal('show');   
           $("#elbowQ1y").click(function(){
                 $('#myElbowModal2').modal('show');
                $("#elbowQ2y").click(function(){
                 confirm ("Looks like a tennis elbow. More information about this injury on the next page...");
                  window.open("../view/elbow.php", "_self");
                 });
                 
                 $("#elbowQ2n").click(function(){
                 alert ("You are ok");
                 });
           });
           
            $("#elbowQ1n").click(function(){
             $('#myElbowModal2').modal('show');
               $("#elbowQ2y").click(function(){
                 alert ("You are probably ok. Not all symptoms were detected. ");
                 });
                 
                 $("#elbowQ2n").click(function(){
                 alert ("You are ok.It looks like it is benign.");
                 });
                
           });
    });
       
}

function showAnkleQuestions(){
    $(document).ready(function(){          
           $('#myAnkleModal1').modal('show');   
           $("#ankleQ1y").click(function(){
                 $('#myAnkleModal2').modal('show');
                 $("#ankleQ2y").click(function(){
                     $('#myAnkleModal3').modal('show');
                      $("#ankleQ3y").click(function(){
                         confirm ("Looks like an ankle sprain. More information about this injury on the next page...");
                          window.open("../view/ankle.php", "_self");
                      });
                 });
                 
                 $("#ankleQ2n").click(function(){
                 alert ("You are ok");
                 });
           });
           
            $("#ankleQ1n").click(function(){
             $('#myAnkleModal2').modal('show');
               $("#ankleQ2y").click(function(){
                 alert ("You are probably ok. Not all symptoms were detected. ");
                  window.open("../view/diagnostic.php", "_self");
                 });
                 
                 $("#ankleQ2n").click(function(){
                 alert ("You are ok.This is probably benign");
                 window.open("../view/diagnostic.php", "_self"); 
                 });
                
           });
    });
       
}

function showGroinQuestions(){
    $(document).ready(function(){          
           $('#myGroinModal1').modal('show');   
           $("#groinQ1y").click(function(){
                 $('#myGroinModal2').modal('show');
                 $("#groinQ2y").click(function(){
                         confirm ("Looks like an groin pull injury. More information about it on the next page...");
                          window.open("../view/groin.php", "_self");
                   
                 });
                 
                 $("#groinQ2n").click(function(){
                 alert ("You are ok");
                 });
           });
           
            $("#groinQ1n").click(function(){
             $('#myGroinModal2').modal('show');
               $("#groinQ2y").click(function(){
                 alert ("You are probably ok. Not all symptoms were detected. ");
                  window.open("../view/diagnostic.php", "_self");
                 });
                 
                 $("#groinQ2n").click(function(){
                 alert ("You are ok.Not this disease.");
                 window.open("../view/diagnostic.php", "_self"); 
                 });
                
           });
    });
       
}

function showThighQuestions(){
    $(document).ready(function(){          
           $('#myThighModal1').modal('show');   
           $("#thighQ1y").click(function(){
                 $('#myThighModal2').modal('show');
                 $("#thighQ2y").click(function(){
                     $('#myThighModal3').modal('show');
                      $("#thighQ3y").click(function(){
                        confirm ("Looks like an harmstring strain. More information about this injury on the next page...");
                          window.open("../view/thighs.php", "_self");
                      });
                 });
                 
                 $("#thighQ2n").click(function(){
                 alert ("You are ok");
                 });
           });
           
            $("#thighQ1n").click(function(){
             $('#myThighModal2').modal('show');
               $("#thighQ2y").click(function(){
                 alert ("You are probably ok. Not all symptoms were detected. ");
                  window.open("../view/diagnostic.php", "_self");
                 });
                 
                 $("#thighQ2n").click(function(){
                 alert ("You are ok.Benign.");
                 window.open("../view/diagnostic.php", "_self"); 
                 });
                
           });
    });
    
 }    
       
 function showKneeQuestions(){
    $(document).ready(function(){          
           $('#myKneeModal1').modal('show');   
           $("#kneeQ1y").click(function(){
                 $('#myKneeModal2').modal('show');
                 $("#kneeQ2y").click(function(){
                     $('#myKneeModal3').modal('show');
                      $("#kneeQ3y").click(function(){
                       confirm ("Looks like an ACL tear. More information about this injury on the next page...");
                          window.open("../view/thighs.php", "_self");
                      });
                 });
                 
                 $("#kneeQ2n").click(function(){
                 alert ("You are ok");
                 });
           });
           
            $("#kneeQ1n").click(function(){
             $('#myKneeModal2').modal('show');
               $("#kneeQ2y").click(function(){
                 alert ("You are probably ok. Not all symptoms were detected. ");
                  window.open("../view/diagnostic.php", "_self");
                 });
                 
                 $("#kneeQ2n").click(function(){
                 alert ("You are ok.Not this disease.");
                 window.open("../view/knee.php", "_self"); 
                 });
                
           });
    });
             
       
    
}

function reset(){
    document.getElementById("firstName").innerHTML ="";
    document.getElementById("lastName").innerHTML ="";
    document.getElementById("email").innerHTML ="";
}


function sendMessage(){
     document.getElementById("firstName").innerHTML ="";
    document.getElementById("lastName").innerHTML ="";
    document.getElementById("email").innerHTML ="";
    alert("Your message was successfully sent") ;
}

var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}


var session;
$(window).load(function(){
if(session === undefined){
$('#myModal').modal('show');
session ="started";
 }
});


   
$("#contactBody").ready(function(){
var menuImage = document.getElementById("menuImage");
if ( menuImage != null)
{
var dish = new Array(6);
var curDish = 0;
dish[0] = "uniqueRunner1.jpg";
dish[1] = "uniqueRunner2.jpg";
dish[2] = "uniqueRunner3.jpg";
dish[3] = "uniqueRunner4.jpg";
dish[4] = "uniqueRunner5.jpg";
dish[5] = "uniqueRunner6.jpg";
function displayImage(){
    if (curDish == 5){
        curDish = 0;
        menuImage.src = "../images/" + dish[curDish];
    }
    else
    {
        curDish++;
         document.getElementById("menuImage").src = "../images/" + dish[curDish];         
    }
   }     
 setInterval(displayImage, 2000);
 }
});

       
  //<![CDATA[
    function reset() 
    {
        document.getElementById("firstName").value = '';
        document.getElementById("lastName").value = '';
        document.getElementById("eMail").value = '';
    }
    




      
     
   // ]]> 

         
    