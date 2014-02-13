<?php
  $con=mysqli_connect("stardock.cs.virginia.edu","cs4720xd5qj","spring2014","cs4720xd5qj");
  // Check connection
  if (mysqli_connect_errno())
    {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  else
    {
      $temp = mysqli_query($con, "SELECT COUNT(Region) FROM maillist
        WHERE Region='$_GET[region]'");
      if ($row = mysqli_fetch_row($temp)){
        echo $row[0];
      }
  }
  mysqli_close($con);
?>