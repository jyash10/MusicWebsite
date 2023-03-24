

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeetHUB</title>
    <!-- <link rel="stylesheet" href="mainstyle.css"> -->
    <link rel='stylesheet' type='text/css' href='mainstyle.css.php'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/images&icon/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Montserrat:ital,wght@1,300&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
    
<div class="topnav">
    <a  href="main.php">Home</a>
    <a  href="aboutUS.php">About Us</a>
    <a href="feedback.php">Feedback</a>
    <a href="logout.php">Logout</a>
    <div class="search-container">
      <form action="search.php" method="post">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit" name="submit"><i class="fa fa-search"></i></button>
      </form>
     
    </div>
  </div>
  
     <div class="container">
         <p class="welcome">Welcome  &nbsp &nbsp<?php session_start(); echo $_SESSION['uname2']?></p>
          <h1>GeetHUB</h1>
          
          <table >
       <tr>
         <td>
          <div class="Song7">
           <?php
		           include('db.php');
               $sql = "SELECT * FROM songsimage where id=7";
               $sql2 = "Select * from songs where id=7 ";
               $res=mysqli_query($con,$sql);
               $res2=mysqli_query($con,$sql2);
	         if(mysqli_num_rows($res)>0){
             $row=mysqli_fetch_array($res);
             $row2=mysqli_fetch_array($res2);
		       $imagefile=$row['imagefile'];
           echo '<img src="upload/'.$imagefile.'">';
           $name = $row2['songname'];
          $songfile=$row2['songfile']; echo "<br>";
          echo '<audio controls>';
		      echo '<source src="upload/'.$songfile.'">';
	        echo '</audio>';
           }
           ?>
          </div>
          </td>
          <td>
          <div class="Song15">
           <?php
		           include('db.php');
               $sql = "SELECT * FROM songsimage where id=15";
               $sql2 = "Select * from songs where id=15 ";
               $res=mysqli_query($con,$sql);
               $res2=mysqli_query($con,$sql2);
	         if(mysqli_num_rows($res)>0){
             $row=mysqli_fetch_array($res);
             $row2=mysqli_fetch_array($res2);
		       $imagefile=$row['imagefile'];
           echo '<img src="upload/'.$imagefile.'">';
           $name = $row2['songname'];
          $songfile=$row2['songfile']; echo "<br>";
          echo '<audio controls>';
		      echo '<source src="upload/'.$songfile.'">';
	        echo '</audio>';
           }
           ?>
          </div>
          </td>
          <td>
          <div class="Song9">
           <?php
		           include('db.php');
               $sql = "SELECT * FROM songsimage where id=9";
               $sql2 = "Select * from songs where id=9 ";
               $res=mysqli_query($con,$sql);
               $res2=mysqli_query($con,$sql2);
	         if(mysqli_num_rows($res)>0){
             $row=mysqli_fetch_array($res);
             $row2=mysqli_fetch_array($res2);
		       $imagefile=$row['imagefile'];
           echo '<img src="upload/'.$imagefile.'">';
           $name = $row2['songname'];
          $songfile=$row2['songfile']; echo "<br>";
          echo '<audio controls>';
		      echo '<source src="upload/'.$songfile.'">';
	        echo '</audio>';
           }
           ?>
          </div>
          </td>
          </tr>
          <tr>
            <td>
          <div class="Song10">
           <?php
		           include('db.php');
               $sql = "SELECT * FROM songsimage where id=10";
               $sql2 = "Select * from songs where id=10";
               $res=mysqli_query($con,$sql);
               $res2=mysqli_query($con,$sql2);
	         if(mysqli_num_rows($res)>0){
             $row=mysqli_fetch_array($res);
             $row2=mysqli_fetch_array($res2);
		       $imagefile=$row['imagefile'];
           echo '<img src="upload/'.$imagefile.'">';
           $name = $row2['songname'];
          $songfile=$row2['songfile']; echo "<br>";
          echo '<audio controls>';
		      echo '<source src="upload/'.$songfile.'">';
	        echo '</audio>';
           }
           ?>
          </div>
          </td>
          <td>
          <div class="Song14">
           <?php
		           include('db.php');
               $sql = "SELECT * FROM songsimage where id=14";
               $sql2 = "Select * from songs where id=14";
               $res=mysqli_query($con,$sql);
               $res2=mysqli_query($con,$sql2);
	         if(mysqli_num_rows($res)>0){
             $row=mysqli_fetch_array($res);
             $row2=mysqli_fetch_array($res2);
		       $imagefile=$row['imagefile'];
           echo '<img src="upload/'.$imagefile.'">';
           $name = $row2['songname'];
          $songfile=$row2['songfile']; echo "<br>";
          echo '<audio controls>';
		      echo '<source src="upload/'.$songfile.'">';
	        echo '</audio>';
           }
           ?>
          </div>
          </td>
            <td>
          <div class="Song13">
           <?php
		           include('db.php');
               $sql = "SELECT * FROM songsimage where id=13";
               $sql2 = "Select * from songs where id=13";
               $res=mysqli_query($con,$sql);
               $res2=mysqli_query($con,$sql2);
	         if(mysqli_num_rows($res)>0){
             $row=mysqli_fetch_array($res);
             $row2=mysqli_fetch_array($res2);
		       $imagefile=$row['imagefile'];
           echo '<img src="upload/'.$imagefile.'">';
           $name = $row2['songname'];
          $songfile=$row2['songfile']; echo "<br>";
          echo '<audio controls>';
		      echo '<source src="upload/'.$songfile.'">';
	        echo '</audio>';
           }
           ?>
          </div>
          </td>
       
          </tr>
          </table>
          </div>
    
    <div class ="button">
            <a class="btn" href="mailto:GeetHUB24@gmail.com">CONTACT US</a>
            <p class="copyright">@ Manav  |  Yash  |  Tanishq</p>
    </div>
</body>
</html>




