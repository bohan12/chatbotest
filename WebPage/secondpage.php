<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link href="../CSS/cssthingsideas.css" media="screen" rel="stylesheet" type="text/css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<div class="header">
		</div>

		<div class="header2">
			.<form action="https://www.aut.ac.nz/">
            			<button type="submit" formaction = "https://www.aut.ac.nz/" class="buttontitle" >AUT Homepage</button>
        		</form>
			<form action="start.php">
            			<button type="submit" formaction = "start.php" class="buttontitle" >Start Page</button>
			</form>
		</div>	
		
 		<style>
			.error {color: #FF0000;}

			.border {
				border: 2 px solid lightblue;
				padding: 10;
  				border-radius:50px 20px;
			}
		</style>

 		<title>Second Page</title>
	</head>
	<div class="framedefinition">
		<body>
			<img src="../images/STEMblur.png" alt="stem" class="logo">
			<h1>Second Page</h1>
			<?php
			echo "this is the second page";
 			?> 
			
			<p><a href="third.php">third page </a> <br /> - Went to third page</p>

			<form action="index.html">
			<button type="submit" formaction = "../index.php">index page</button>
			</form>
			Do you prefer to working with: 
			<div id="div1">
			<img onclick="changeImage()" id="image" src="../images/computerO.png">
			</div>
			<div id="div2">
			<img onclick="changeImage2()" id="image2" src="../images/calculusO.png">
			</div>
			<script type="text/javascript">
				function changeImage(){
				if($("#image").attr("src")=="../images/computerO.png"){
				$("#image").attr("src",'../images/computerl.png');
		
			}else{
				$("#image").attr("src",'../images/computerO.png');
			}


			}


				function changeImage2(){
				if($("#image2").attr("src")=="../images/calculusO.png"){
			$("#image2").attr("src",'../images/calculusI.png');
		
			}else{
			$("#image2").attr("src",'../images/calculusO.png');
			}


			}
			</script>
			
			<input type="submit" name="submit" value="Submit">  
		</form>

			
		<form action="third.php">
			<button type="submit" formaction = "third.php">Continue to next page ►</button>
		</form>

		</body>
	</div>
</html>
