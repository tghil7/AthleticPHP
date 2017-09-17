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

function showPosition(position) {
    var latlon = position.coords.latitude + "," + position.coords.longitude;

    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyBhmG7NpY-P1Sb39eFYz8kJ09DPZaxRAr0";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
//To use this code on your website, get a free API key from Google.
//Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation.";
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable.";
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out.";
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred.";
            break;
    }
}
         var session;
         $(window).load(function(){
             if(session == undefined){
                 $('#myModal').modal('show');
               session ="started";
           }
         });
         
    