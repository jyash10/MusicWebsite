<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}


.header {
  padding: 70px;
  text-align: center;
  background-color: rgb(42, 161, 101);
  color: rgb(255, 255, 255);
}


.header h1 {
  font-size: 40px;
}


.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}


.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}



.navbar a.right {
  float: right;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}


.navbar a.active {
  background-color: #666;
  color: white;
}


.row {  
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
}


.side {
  -ms-flex: 30%; 
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}


.main {   
  -ms-flex: 70%;
  flex: 70%;
  background-color: white;
  padding: 20px;
}


.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}


@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}


@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header" >
  <h1>Geethub</h1>
  <p>Online music portal for music lovers</p>
</div>

<div class="row">
  <div class="side">
    <h2>About Geethub</h2>
    <img src="images&icon/1.jpg" alt="1st Image" width="100%" padding="20px">
    <p>Different varities of songs are available for different personalities</p>
    <h3>This is a free to use website</h3>
    <p>One good thing about music, when it hits you, you don't feel pain</p>
    <div> <img src="images&icon/2.jpg"  width="100%" height="100%" padding="20px"></div><br>
    <div> <img src="images&icon/3.jpg"  width="100%" height="100%" padding="20px"></div><br>
    <div  style="height:60px;"></div><br>
    <div  style="height:60px;"></div>
  </div>
  <div class="main">
    <h2>GEETHUB</h2>
    <h5>Brief about our website</h5>
    <div> <img src="images&icon/4.jpg"  width="75%" padding="20px"></div>
    <p>Geethub is a simple music website where a user after login or signing up with us, can use the features of our website and enjoy themselves.</p>
    <p>User gets the feature of searching songs from a wide variety of genres.</p>
    <p>Along with song, the user is also informed about the singer and album of the song</p>
    <br>
    <h2>Feedback section</h2>
    <h5>Since this is a developing website, we are always open to the feedbacks of our users which will help to improve our service and make the website more user friendly</h5>
    <div> <img src="images&icon/5.jpg"  width="75%" padding="20px"></div>
    <p>Made by</p>
    <p>This website has been developed by the contributions of all 3 members including Manav, Tanishq and Yash</p>
    <p>Hope you like our website and use it in your daily life</p>
  </div>
</div>

</body>
</html>