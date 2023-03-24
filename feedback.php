<?php
session_start();
include('db.php');
if($_SERVER['REQUEST_METHOD'] == "POST")
{
if(isset($_POST['Submit']))
{
    $usern=$_POST['username'];
    $email=$_POST['email'];
    $count=$_POST['country'];
    $feed=$_POST['feedback'];
    $q="select id from user where username='$usern'";
    $r=mysqli_query($con,$q);
    if(mysqli_num_rows($r)>0)
    {
        while($row=mysqli_fetch_array($r))
        {
            $id1=$row['id'];
            $q2="insert into feedbackuser (userid,username,email,feedback,COUNTRY) values('$id1','$usern','$email','$feed','$count')";
            $r2=mysqli_query($con,$q2);
            if($r2)
            {
              echo "<script> alert('THANKS FOR FILLING THE FEEDBACK FORM.YOUR FEEDBACK HAS BEEN SUBMITTED SUCCESSFULLY!!')
              </script>";
            }
            else
            echo "<script> alert('PLEASE ENTER CORRECT USERNAME')</script>";
    }
  }
}

}

?>

<!DOCTYPE html>    
<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">    
<link rel="stylesheet" href="feedback.css">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Montserrat:ital,wght@1,300&family=Sacramento&display=swap" rel="stylesheet">  
</head>    
<body>    
           
<div class="topnav">
    <a  href="main.php">Home</a>
    <a  href="aboutUS.php">About Us</a>
    <a href="feedback.php">Feedback</a>
    <a href="logout.php">Logout</a>
  </div>
  
     <div class="container">
        
          <h1>GeetHUB</h1>   
   
  <h2>Feedback Form</h2> <br> 
  <form action="feedback.php" method="post">
    <div class="row">    
      <div class="col-25">    
        <label for="fname">User Name</label>    
</div>
    <div class="col-75">    
        <input type="text" id="username" name="username" placeholder="Your username..">    
      </div>    
    </div>       
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="email" placeholder="Your mail id..">    
        </div>    
      </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="country">Country</label>    
      </div>    
      <div class="col-75">    
        <select id="country" name="country">    
            <option value="none">Select Country</option>    
          <option value="australia">Australia</option>    
          <option value="canada">Canada</option>    
          <option value="usa">USA</option>    
          <option value="russia">Russia</option>    
          <option value="japan">Japan</option>    
          <option value="india">India</option>    
          <option value="china">China</option>    
        </select>    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="comment">Comment</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="feedback" placeholder="Write something.." style="height:200px"></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit" name="Submit">    
    </div>    
  </form>    
</div>    
<div class ="button">
            <a class="btn" href="mailto:GeetHUB24@gmail.com">CONTACT US</a>
            <p class="copyright">@ Manav  |  Yash  |  Tanishq</p>
    </div>
</body>    
</html>