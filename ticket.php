<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="tic_style.css" type="text/css" />
</head>
<body>
    <div id="wrapper">
                    <button onclick="setInterval(getNumber,10000)" id = "startbtn">Start</button>
    <div class = "ticket">
        
        <table border="10" >
            <tr>
                <td><button id="grid1" class="button">1</button></td>
                <td><button id="grid2" class="button">2</button></td>
                <td><button id="grid3" class="button">3</button></td>
                <td><button id="grid4" class="button">4</button></td>
                <td><button id="grid5" class="button">5</button></td>
            </tr>
            <tr>
                <td><button id="grid6" class="button">6</button></td>
                <td><button id="grid7" class="button">7</button></td>
                <td><button id="grid8" class="button">8</button></td>
                <td><button id="grid9" class="button">9</button></td>
                <td><button id="grid10" class="button">10</button></td>
            </tr>
             <tr>
                <td><button id="grid11" class="button">11</button></td>
                <td><button id="grid12" class="button">12</button></td>
                <td><button id="grid13" class="button">13</button></td>
                <td><button id="grid14" class="button">14</button></td>
                <td><button id="grid15" class="button">15</button></td>
            </tr>
             <tr>
                <td><button id="grid16" class="button">16</button></td>
                <td><button id="grid17" class="button">17</button></td>
                <td><button id="grid18" class="button">18</button></td>
                <td><button id="grid19" class="button">19</button></td>
                <td><button id="grid20" class="button">20</button></td>
            </tr>
        </table>
    </div>
     </div>
    <script src="../js/jquery-2.1.4.min.js"></script>
    <script src="lib.js"></script>
    <script type="text/javascript"> 
        var array = [0];
        var seq = [0];
        var s,r = -1;
        var arr=new Array(5,13,8,20,17,2,18,7,4,14,11,1,12,3,15,6,16,19,9,10);
        var flag = new Array(false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false,false);
        for(var i=1;i<=20;i++){
                array = generate(0,array)
                document.getElementById("grid"+i).innerHTML = array[array.length-1];
        }
    
        $("#startbtn").click(function(){
            $("#startbtn").css("display", "none");
        });
        function getNumber(){
            
            if(r<20)
            {	
                r++;
                alert("Howzie number "+arr[r]+" is generated !");
                s=arr[r];            }
            else alert("Game over! Thank you for playing Howzie v1.0");
        }
        
        length = document.getElementsByTagName("button").length;
        for(var j=0; j<length-1; j++){
            document.getElementsByTagName("button")[j].addEventListener ( "click" , function () {
            var no = this.innerHTML;
            var score = 0;
             if(no == arr[r]) {
                if(!flag[r]){
                     $.post('technoread.php',{source:no},
                         function(data){
                             str = data.trim();
                             ans = str.substr(str.length - 1);
                             que = str.substr(0,str.length - 1);
                          
                    });
                    var Q = prompt(que,"type option of answer here..");
                    if(Q.toUpperCase() == ans){
                        this.className = "button_c";
                        //++score;
                        //document.getElementById("score").innerHTML = score;
                    } else this.className = "button_w";
                    flag[r] = true;
                }else{
                    alert("You are done with this number!");
                }
                 
            }else{
                if(r == -1) alert("Please wait for the first number to generate");
                else
                alert("you have clicked a wrong  number! \n click "+arr[r]+" instead");
                //if(r >= arr.length) 
            }
                
                
           
        });
        }
        
         
    </script>
   
</body>
</html>