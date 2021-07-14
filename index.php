<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" href="new_pics/cute_morty.png">
  <title>Mathews Boban</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
#hits {
  width: 300px;
  border: solid red 2px;
}
.carousel-inner img {
  margin: auto;
}

div.a {
  margin-left: 80px;
  font-size: large;
}


.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  /*width: 50%;*/
}
  </style>
</head>

<body>


 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <!-- <li><a href="academics.html">Academics</a></li> -->
      <!-- <li><a href="misc.html">Research Interests</a></li> -->
      <!-- <li><a href="projects.html">Projects</a></li> -->
      <!-- <li><a href="https://www.cse.iitb.ac.in/~sbayare/cs251.php">CS 251</a></li> -->
      <li><a href="contact.html">Contact</a></li>
      <!-- <li><a href="comment.html">Comments</a></li> -->
      <!-- <li><a href="view_comments.php">Previous Comments</a></li> -->
    </ul>
  </div>
</nav>

<!-- <h1 style="text-align:center">Welcome to the homepage of Mathews Boban</h1> -->

 <img src="new_pics/hiking.jpg" alt="portrait" style="width:25%;height:25%;" class="center"> 

<div class="a">
<!-- <h2>Short Bio</h2> -->
<br>
I am a fourth year undergraduate in Computer Science & Engineering at <a href = "https://www.iitb.ac.in/">IIT Bombay</a>.
<br>
Incoming visitor at <a href = "https://www.technion.ac.il/en/home-2/">Technion</a>, Israel under the supervision of <a href = "http://yuvalfilmus.cs.technion.ac.il/"> Yuval Filmus</a>
</div>


<div class="a">
<h2>Current Research Interests</h2> 
	<ul>
    <li>Combinatorial & LP-based Algorithms</li>
    <li>Algebraic Algorithms</li>
    <li>Analysis of Boolean Functions</li>
		<!-- <li>Discrete Maths</li> -->
	</ul>
</div>


<!-- <div class="a">
<h2>Other Interests:</h2> 
  <ul>
    <li>Breaking Bad</li>
    <li>Mad Men</li>
  </ul>
</div>
 -->


  


<!-- php code only saves count. Commented out the part that prints -->
<?php
$myfile = fopen("count.txt", "r") or die("Unable to open file!");
   $a = fread($myfile,filesize("count.txt"));
  fclose($myfile);
  // echo "<h3 > Hits: " . $a ."</h3>"; 
$myfile = fopen("count.txt", "w") or die("Unable to open file!");   
   $b = $a + 1;
fwrite($myfile, $b);
fclose($myfile);
   ?>

 
</body>
</html>
