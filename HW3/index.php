<!DOCTYPE html>
<html>
<head><meta charset="UTF-8">
	<link rel="stylesheet" href="hw3.css">
	<title>Sneaker Mania Hut</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
  	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  	<link rel="stylesheet" href="/resources/demos/style.css">
	<script>
	function showRegion(str)
	{
		var xmlhttp;
		if (str.length==0) {
			document.getElementByld("txtHint").innerHTML="";
			return;
		}
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","gethint.php?q="+str,true);
		xmlhttp.send();
	}
	function showCount(str)
	{
		var xmlhttp;
		if (str.length==0) {
			document.getElementByld("txtCount").innerHTML="";
			return;
		}
		if (window.XMLHttpRequest){
			xmlhttp=new XMLHttpRequest();
		}
		else{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById("txtCount").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("GET","getCount.php?region="+str,true);
		xmlhttp.send();
	}
	</script>
</head>
<body>
	<div class="header">
		<h1>The Sneaker Mania Blog</h1>
		<h2>Account Management Page</h2>
	</div>
	<div id="abtme">
		<h3>About me:</h3>
		<p>Name: Xinzhuo Dong <br> Contact Info: xd5qj@virginia.edu</p>
			</div>
	</div>
	<div id="introduction">
		<h2>About this page:</h2>
		<p>The Management Page allows you to put shoes information into our database and update your email address for our mail list. Thank you.
		</p>
	</div>
	<div id="Spotify">
		<p>Song of the Day: "All I do is Win"</p>
		<embed width="200" height="200" src="https://embed.spotify.com/?uri=spotify:track:0RIHDrcRAXtUlnkvTYPW1a" frameborder="1">
	</div>

	<div class="insert_table">
		<p>Put shoes info into our database: </p>
		<form action="insert.php" method="post" autocomplete="on">
  			<fieldset>
	    		<div>
	      			<label for="name">Shoes Name:</label><br>
	      			<input type="text" name="name">
	    		</div>
	    		<div>
		      		<label for="date">Release Date:</label><br>
		      		<input type="text" name="date">
	    		</div>
	    		<div>
			    	<label for="price">Price:</label><br>
			    	<input type="number" name="price">
	    		</div>
	    		<div>
			    	<label for="series">Series:</label><br>
			    	<input type="text" name="series">
	    		</div>
  			</fieldset>
  			<input type="Submit">
		</form>
	</div>

	<div class="insert_table">
		<p><a id="sign_up" >Update your email address here: </a></p>
		<form action="email_update.php" method="post" autocomplete="on">
  			<fieldset>
	    		<div>
		      		<label for="name">Name:</label>
		      		<input type="text" name="name" title="Please provide also your name.">
	    		</div>
	    		<div>
			    	<label for="email">Email:</label>
			    	<input type="email" name="email" title="Your Email Address.">
	    		</div>
	    		<div>
	    			<label for="region">Your region:</label>
	    			<input type="text" id="region" name="region" onkeyup="showRegion(this.value)" />
	    		</div>
	    		<div><p><span id="txtHint"></span></p></div>
  			</fieldset>
  			<input type="submit">
		</form>
	</div>

	<div class="insert_table">
		<p>See how many of our users are from:</p>
		<form action=""> 
			<select name="Region" onchange="showCount(this.value)">
			<option value="">Select a Region</option>
			<option value="china">China</option>
			<option value="u.s ">United States</option>
			<option value="u.k">United Kingdom</option>
			<option value="france">France</option>
			<option value="canada">Canada</option>
			</select>
		</form>
		The number of user in your region is: <a id="txtCount"></a>
	</div>

	<div>
		<form action="display.php" method="get">
			<button class="button" type="submit">Display all the shoes</button>
		</form>
	</div>
	<div>
		<form action="mainpage.php" method="get">
			<button class="button" type="submit">Go to the main page</button>
		</form>
	</div>
  	<div id="detail_tag">
	  	<details>
	  		<summary>Copyright 2014. </summary>
	  		<p> - by Xinzhuo Dong. All Rights Reserved. </p>
	  	</details>
 	</div>

</body>
</html>