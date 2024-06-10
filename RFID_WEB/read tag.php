<?php
// Initialisation de l'UID container
$Write = "<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
file_put_contents('UIDContainer.php', $Write);
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
     <link rel="stylesheet" href="read tag.css" />
     <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function(){
             $("#getUID").load("UIDContainer.php");
            setInterval(function() {
                $("#getUID").load("UIDContainer.php");	
            }, 500);
        });
    </script>
     <title>LECTURE DE CARTE</title>
</head>

<body>
    		
	<header class="container" >
		
     	<ul class="topnav" style="background-color: #333 ;"  >
			<div>	<li><a style=" background-color: #4CAF50; height: 60px" class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">Donnée utilisateurs</a></li>
			<li><a href="registration.php">Enregistrer</a></li>
			<li><a href="read tag.php">Lecture de carte</a></li></div>
		<div><img  style="width: 60px;heigth:80px; margin-left:350px; margin-top: px;"src="image/inphb-removebg-preview.png" alt=""></div>
		</ul>
		
    </header>
    <br>
    
    <h1 align="center" id="blink" style="color:#4CAF50">Svp scannez votre carte </h1>
    
    <p id="getUID" hidden></p>
    
    <br>
    
    <div id="show_user_data">
        <form>
            <table  width="452" border="1" bordercolor="#10a0c5" align="center"  cellpadding="0" cellspacing="1"  bgcolor="#000" style="padding: 2px">
                <tr>
                    <td  height="40" align="center"  bgcolor="orange"><font  color="#FFFFFF">
                        <b>Données utilisateur</b>
                        </font>
                    </td>
                </tr>
                <tr>
                    <td  bgcolor="#f9f9f9">
                        <table width="452"  border="0" align="center" cellpadding="5"  cellspacing="0">
                            <tr>
                                <td width="113" align="left" class="lf">ID</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left">--------------------------</td>
                            </tr>
                            <tr bgcolor="#f2f2f2">
                                <td align="left" class="lf">NOM ET PRENOMS</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left">--------------------------</td>
                            </tr>
                            <tr>
                                <td align="left" class="lf">GENRE</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left">--------------------------</td>
                            </tr>
                            <tr bgcolor="#f2f2f2">
                                <td align="left" class="lf">EMAIL</tdMAIL>
                                <td style="font-weight:bold">:</td>
                                <td align="left">--------------------------</td>
                            </tr>
                            <tr>
                                <td align="left" class="lf">MOBILE NUMBER</td>
                                <td style="font-weight:bold">:</td>
                                <td align="left">--------------------------</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <script>
        var myVar = setInterval(myTimer, 1000);
        var myVar1 = setInterval(myTimer1, 1000);
        var oldID="";
        clearInterval(myVar1);

        function myTimer() {
            var getID = document.getElementById("getUID").innerHTML;
            oldID = getID;
            if(getID != "") {
                myVar1 = setInterval(myTimer1, 500);
                showUser(getID);
                clearInterval(myVar);
            }
        }
        
        function myTimer1() {
            var getID = document.getElementById("getUID").innerHTML;
            if(oldID != getID) {
                myVar = setInterval(myTimer, 500);
                clearInterval(myVar1);
            }
        }
        
        function showUser(str) {
            if (str == "") {
                document.getElementById("show_user_data").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("show_user_data").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "read tag user data.php?id=" + str, true);
                xmlhttp.send();
            }
        }
        
        var blink = document.getElementById('blink');
        setInterval(function() {
            blink.style.opacity = (blink.style.opacity == 0 ? 1 : 0);
        }, 750); 
    </script>
</body>
</html>
