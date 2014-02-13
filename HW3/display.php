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
	</script>
</head>
<body>
	<div class="header">
		<h1>The Sneaker Mania Blog</h1>
		<h2>A Sneaker Tracking Site for fans</h2>
	</div>
	<div id="abtme">
		<h3>About me:</h3>
		<p>Name: Xinzhuo Dong <br> Contact Info: xd5qj@virginia.edu</p>
	</div>
	<div id="introduction">
		<h2>About this site:</h2>
		<p>This app will track the release of limited-edition sneakers. It will contain information similar to that of the
			<a href="http://insider.nike.com/us/">nike insider</a>. 
		</p>
		<p>List of Shoes:</p>
	</div>
	<div id="Spotify">
		<p>Song of the Day: "All I do is Win"</p>
		<embed width="200" height="200" src="https://embed.spotify.com/?uri=spotify:track:0RIHDrcRAXtUlnkvTYPW1a" frameborder="1">
	</div>

	<div id="show_db">
		<?php
		// Create connection
		$con=mysqli_connect("stardock.cs.virginia.edu","cs4720xd5qj","spring2014","cs4720xd5qj");
		// Check connection
		if (mysqli_connect_errno())
  		{
  			echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}
  		else
  		{
  			$result = mysqli_query($con, "SELECT * FROM shoes_info");
  			while($row = mysqli_fetch_array($result))
  				{
  				echo "Shoes Name: ". $row['name'] . "\tRelease Date: " . $row['date'];
  				echo "<br>";
  				}
  		}
  		mysqli_close($con);
		?>
	</div>
	<div id="display_form">
		<form action="index.php" method="get">
			<button type="submit">Go back!</button>
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