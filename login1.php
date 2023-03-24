<?php 

session_start();

	include("db.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(isset($_POST['SignUp'])){
		$user_name = $_POST['uname'];
		$password = $_POST['psw'];
    $email=$_POST['email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$sql = "insert into user(username,password,email) values('$user_name','$password','$email')";
			$result = mysqli_query($con,$sql);

			if($result)
			{
            echo "<script> alert('YOUR ACCOUNT HAS BEEN CREATED SUCCESSFULLY!!')
            </script>";
            
					}
				}
			}
      // header("location: login1.php");
      if(isset($_POST['login']))
      {
        $user_name = $_POST['uname'];
        $password = $_POST['psw'];
        $_SESSION['uname2']=$user_name;
        $q="select username from user where username='$user_name' and password='$password'";
        $r=mysqli_query($con,$q);
        $count=mysqli_num_rows($r);
        if($count==1){
         header("location: main.php");
        }
      else
      {
        echo "<script> alert('Wrong Username or Password!!')
            </script>";
        // header("location: login1.php");
        
      } 
      }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeetHUB</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="icon" href="/images&icon/logo2.png">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Montserrat:ital,wght@1,300&family=Sacramento&display=swap" rel="stylesheet">
    
    
    <script type="text/javascript">
function validate() {
 var email = document.forms["myform"]["email"].value;
 if(email.indexOf('@')<=0)
{
   alert("**Position of @ is wrong");
return false;
}
if(email.charAt(email.length-4)!='.' && email.charAt(email.length-3)!='.')
{
   alert("**Invalid Position of."); 

return false;
}
var password=document.forms["myform"]["psw"].value;
var conpassword=document.forms["myform"]["confirm"].value;
if(password != conpassword)
{
  alert("Password did not matched");
  return false;
}
}
</script>
  </head>
<body>
     <div class="container">
      <div class="navbar">
        <h1>GeetHUB</h1>
        <div>
        <table cellspacing="60">
            <tr>
           <td><img class ="profileimage" src="images&icon/image4.jpg"  alt="myimage"></td>
            <td>
                <br><br><br><br>
                <button onclick="document.getElementById('id01').style.display='block'" style="width:200%;">Login</button>
            <br><br><br>
            <button onclick="document.getElementById('id02').style.display='block'" style="width:200%;">SignUp</button>
            </td>
           </tr>
        </table>
        </div>
    </div>
    </div>


    <div id="id01" class="login">
  <form class="login-content animate" action="" method="post">
    <div class="b-container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>       
      <button type="submit" name="login">Login</button>
      </div>

    <div class="b-container" style="background-color:#f1f1f1">
      <button  type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>


<div id="id02" class="signup">
  <form class="signup-content animate" name="myform" action="login1.php" method="post" onsubmit="return validate()">
    <div class="b-container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="email"><b>Email</b></label><br>
      <input type="email" placeholder="Enter Email" name="email" required><br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required> 
      <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="confirm" required> 

      <button type="submit" name="SignUp">SignUp</button>
      </div>

    <div class="b-container" style="background-color:#f1f1f1">
      <button  type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div> 


    <div class ="button">
            <a class="btn" href="mailto:geetHUB24@gmail.com">CONTACT US</a>
            <p class="copyright">@ Manav  |  Yash  |  Tanishq</p>
    </div>


</body>
</html>

<script>
// Get the login,signup
var login = document.getElementById('id01');
var signup = document.getElementById('id02');

// When the user clicks anywhere outside of the login, close it
window.onclick = function(event) {
    if (event.target == login) {
        login.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == signup) {
        login.style.display = "none";
    }
}
</script>
