


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeetHUB</title>
    <link rel='stylesheet' type='text/css' href='mainstyle.css.php'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="/images&icon/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Montserrat:ital,wght@1,300&family=Sacramento&display=swap" rel="stylesheet">

<style>

img{
  margin-left:575px;
  margin-top:60px;
  border-radius:500px;
  height: 350px;
  width: 375px;
}
audio{
  margin-left:120px;
  margin-bottom:200px;
  
  width: 570px;
}
audio:hover ,audio:focus, audio:active{
  transform: scale(1.05);
}

</style>

</head>
<body>
<body>
        
<div class="topnav">
    <a  href="main.php">Home</a>
    
    <a href="feedback.php">Feedback</a>
    <a href="logout.php">Logout</a>
  </div>
  
     <div class="container">
         <p class="welcome">Welcome  &nbsp &nbsp<?php session_start(); echo $_SESSION['uname2']?></p>
          <h1>GeetHUB</h1>
        
<div class=searchsong>
<?php
		  include('db.php');
		  if($_SERVER['REQUEST_METHOD'] == "POST")
		  {
	if(isset($_POST['submit'])){
	$str=$_POST['search'];
  strtoupper($str);
  if($str!='')
  {
    $sql = "SELECT * FROM songs where songname like '%$str' or song_cat like '$str' or singername like '%$str%'";
	$res=mysqli_query($con,$sql);
  if(mysqli_num_rows($res)<1){
    echo "hi";
    echo "<script> alert('No results found!');
    </script>";
    echo '<script language="javascript">';
    echo 'window.location.href="main.php"';
    echo '</script>'; 
  }
  else{
  
    $row=mysqli_fetch_array($res);
    $id2=$row['id'];
    $sname=$row['songname'];
    $singer=$row['singername'];
    $cat=$row['song_cat'];
	$sql2 = "Select * from songsimage where id='$id2' ";
  $sql3="select * from musician where songid='$id2'";
  $res3=mysqli_query($con,$sql3);
    $res2=mysqli_query($con,$sql2);
	if(mysqli_num_rows($res)>0){
             $row2=mysqli_fetch_array($res2);
             $row3=mysqli_fetch_array($res3);
             $album=$row3['album'];
		       $imagefile=$row2['imagefile'];
          
           $name = $row['songname'];
          $songfile=$row['songfile'];

          
          echo '<img src="upload/'.$imagefile.'">';
         
          
          echo '<div class=sdetails>';

          
          echo "Song Name : ".$sname."<br>"."Singer Name : ".$singer."<br>"."Category : ".$cat."<br>";
          echo "Album Name : ".$album;
          echo '</div>';

          echo '<audio controls>';
		      echo '<source  src="upload/'.$songfile.'">';
	        echo '</audio>'; echo "<br>";

         

  

          
          
  }
  }
}
  else{
    echo "<script> alert('Please enter something in the search box')
    </script>";
    echo '<script language="javascript">';
    echo 'window.location.href="main.php"';
    echo '</script>';
           }
          }
    
}
else
echo "<script> alert('Please enter something in the search box')
</script>";
		  
?>
        </div>
        </div>
        <div class ="button">
            <a class="btn" href="mailto:GeetHUB24@gmail.com">CONTACT US</a>
            <p class="copyright">@ Manav  |  Yash  |  Tanishq</p>
    </div>

</body>
</html>