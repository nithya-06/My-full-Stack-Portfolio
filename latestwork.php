
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #00101f;
  padding: 5px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1500px;
  
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 10px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 10px;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {

  padding: 13px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
 text-align: center;
  width:100px;
  height: 30px;
  border-width: thin;
  background: linear-gradient(to right, #3fcaff 0%, #a4ffb0 51%, #3fcaff 100%);
margin-left: 50px;
  border-color: blue;
  color:#222222;
}

.btn:hover {
  background-color: #ddd;
}
.worktitle
{
color:white;
padding :10px;
}
.workdescription
{
color:white;
padding :10px;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>

    <link rel="stylesheet" type="text/css" href="style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- MAIN (Center website) -->
<nav>
          <ul>
            <li class="number1" ><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html">NITHYA BALASUNDAR</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html">Home</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/skill.php">My Skills</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/recommendation.html">Recommendation</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/latestwork.php">Latest Works</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/">Blog</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hire.php">Hire Me</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/login.php">Log in</a></li>
          <li> <a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/register.php">Sign up</a></li>
        </ul>
      </nav> 
<div class="main">
 <h1 style="color:white" ><font face="Rajdhani">MY LATEST WORK</font></h1>
     <p style="color:white">I am looking to expand my portfolio while I am on top and while I am young!!</p>
      
<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')"> Show all</button>
  <button class="btn" onclick="filterSelection('design')">Design </button>
 <button class="btn" onclick="filterSelection('photography')"> Photography</button>
 <button class="btn" onclick="filterSelection('websites')"> websites</button></div>


<!-- Portfolio Gallery Grid -->
     <?php 					
					{
					$host = "127.0.0.1:3306";
					// connect to database
					$conn = mysqli_connect($host, 'nithyaba_nithyabalasundar', '8c@nithya', 'nithyaba_project_1');

                      //$host = "127.0.0.1:3306";
                      //$conn =mysqli_connect(host, 'nithyaba_nithyabalasundar', '8c@nithya', 'nithyaba_project_1');
                      if($conn->connect_error)
                      {
                        die("Connection failed:".$conn-> connect_error);
                      }
                      
						$sql = "SELECT * FROM latestwork ";
						$results = mysqli_query($conn,$sql);
						
						echo '<br>';
						echo  '<div class="row">';
                        echo '<div class="column photography">';
                        echo '<div class="content">';  
						 echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_1.PNG" height="110" width="110" ><font color="white">DESIGN</font>';
						 echo '<font color="white">';
						 echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
						echo '</div>';
						echo '</div>';
						
							echo '<div class="row">';
						echo '<div class="column photography">';
                        echo '<div class="content">';
						echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_5.PNG"height="110" width="110" ><font color="white">PHOTOGRAPHY</font>';
						 echo '<font color="white">';
						echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
						echo '</div>';
						echo '</div>';
						
							
						echo  '<div class="row">';
                        echo '<div class="column photography">';
                        echo '<div class="content">';  
						 echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_3.PNG" height="110" width="110" ><font color="white">APPS</font>';
						 echo '<font color="white">';
						 echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
						echo '</div>';
						echo '</div>';
							
						 
                         echo '<div class="column design">';
                         echo '<div class="content">';
                        echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_7.JPG" height="110" width="110" ><font color="white">3D Design</font>';
                        echo '<font color="white">';
						echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
                         echo '</div>';
                         echo '</div>';
						 echo '<br>';
						 echo '<br>';
						 echo '<br>';
						
					
					echo '<div class="column design">';
                        echo '<div class="content">';
						echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_3.PNG" height="110" width="110" ><font color="white">PHOTOGRAPHY</font>>';
						 echo '<font color="white">';
						echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
						echo '</div>';
						echo '</div>';
						
						echo '<div class="column design">';
                        echo '<div class="content">';
                        echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_6.jpg" height="110" width="110" ><font color="white">APPS</font>;
                        echo' <font color="white">';
						echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
                        echo '</div>';
                         echo '</div>';
						
						echo '<div class="row">';
						echo '<div class="column websites">';
                        echo '<div class="content">';
						echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_5.PNG"height="110" width="110" <font color="white">ANALYSIS</font>'>';
						 echo '<font color="white">';
						echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
						echo '</div>';
						echo '</div>';
						
					
                        echo '<div class="column websites">';
                        echo '<div class="content">';  
						 echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_3.PNG" height="110" width="110" >';
						 echo '<font color="white">';
						 echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
						echo '</div>';
						echo '</div>';
						echo '</div>';	
					
					
                         echo '<div class="column websites">';
                        echo '<div class="content">';
						echo '<img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_9.PNG" height="110" width="110" >';
						 echo '<font color="white">';
						echo $row["worktitle"];
						echo $row["workdesc"];
						echo '</font>';
						echo '</div>';
						echo '</div>';
					

						
						
						
                      mysqli_close($conn);
					  }
					  
					 
?>

             
 
   
<!-- END GRID -->
</div>
<!-- END MAIN -->
</div>

            


<script>

filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
