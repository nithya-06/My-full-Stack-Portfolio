<!DOCTYPE html>
<html>	
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">						
	<title>Skills</title>
	<link rel="stylesheet" type="text/css" href="skill.css"> 
  <link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet"> 
  
 </head>
 <body>
 	<div class="wrapper">
 <nav>
          <ul  style="font-family: Roboto">
            <li class="number1" ><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_proj3/home.html">NITHYA BALASUNDAR</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html">Home</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/skill.php">My Skills</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/recommendation.html">Recommendation</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/latestwork.php">Latest Works</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud">Blog</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hire.php">Hire Me</a></li>
           <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/login.php">Log in</a></li>
           <li> <a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/register.php">Sign up</a></li>
          
        </ul>
      </nav>
      
      <div id="login">
          <div class="header">
                Log in<button onclick="document.getElementById('login').style.display='none';" class="closeBtn">X</button>
          </div>

          <div class="form">
              <label>User:</label><br>
              <input type="text" id="user">

              <br><br>
              <label>Password:</label><br>
              <input type="text" id="pass">
          </div>

          <div class="footer">
            <button class="primaryBtn">Get In</button>
            <button class="primaryBtn" onclick="document.getElementById('login').style.display='none';">Close</button>
            
        </div>
    </div>


    <div id="checkin">
            <div class="header">
                  check in<button onclick="document.getElementById('checkin').style.display='none';" class="closeBtn">X</button>
            </div>
  
            <div class="form">
                <label>Name:</label><br>
                <input type="text">
  
                <br><br>
                <label>Last Name:</label><br>
                <input type="text">

                <br><br>
                <label>Email:</label><br>
                <input type="text">

                <br><br>
                <label>User:</label><br>
                <input type="text">

                <br><br>
                <label>Password:</label><br>
                <input type="text">

                <br><br>
                <label>Repeat Password:</label><br>
                <input type="text">
            </div>==
       
            <div class="footer">
              <button class="primaryBtn">Save</button>
              <button class="primaryBtn" onclick="document.getElementById('login').style.display='none';">Close</button>
              
          </div>
 </div>
</nav>
 <div class="row">
<div class="column1">
 <h1 >SKILLS&<br>EXPERTISE</h1>
 <p>Visual Designer Front-end Developer 3D Designer</p>
 <br><br>
  <img src="0.jpg" height="250" width="250">

  </div>
  <div class="column2">
  <div class="row">
  <div class="column1">
  <br>
  <br><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/logo1.JPG" height="60" weight="60" ><br><br>
      <p>BRANDING<br><br>Creating logos and posters <br>your company</p><br><br>
      <br><br><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/logo2.JPG" height="60" weight="60" ><br>
      <p>DESIGNING<br><br>maintaining the quality and<br>productivity in the works to please<br>my clients</p>
    <br>
    </div>
    <div class="row">
    <br>
      <br><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/logo3.JPG" height="60" weight="60" ><br><br>
      <p>MARKETING<br><br> Trend designs for a better<br> experience of both images ,logos<br>and websites</p><br><br>
      <br><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/logo4.JPG"height="60" weight="60" ><br>
      <p>PROGRAMMING<br><br>Developing applications and systems<br>that meets the needs<br>and the streamlinethe work and<br> experience of users</p><br>
</div>
</div>
<br>
</div>
</div>
<div class="row">
<h2><strong>Smart Digital Solutions </strong><small>A Front-End Developer</small></h2>
<table>
	<tr>
		<td><img src="device_01.png"></td>
		<td><img src="device_02.png"></td>
			<td><img src="device_03.png"></td>
			</tr>
			</table>
</div>
</div>
</div>

<br>
<br>
<br>
<div class="work experience">
            <h4 class="work">WORK EXPERIENCE</h4>
            <p class="work_exp">I am looking to expand my profile while I am on top and while I am young!!</p>

            <br>
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
						$sql = "SELECT * FROM workexperience";
						$results = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($results)){
						echo   '<div class="sec">';
                        echo    '<div class="left sk_left">';
						echo '<br>';
						echo '<p class="month">'.$row["startdate"].'-.</p>';
						echo '<p class="date">'.$row["enddate"].'</p>';
						echo '<p class="sub">'.$row["companyname"].'</p>';
						echo '<p class="role">'.$row["jobposition"].'</p>';
						echo '</div>';
						echo  '<div class="right sk_right">';
                	    echo '<div class="description">';
						echo '<p class="role1">'.$row["jobtitle"].'</p>';
						echo '<p class="desc">'.$row["workdescription"].'</p>';
					    echo '</div>';
						 echo '</div>';
						 echo '</div>';
						 
						
						
							}
                      mysqli_close($conn);
					  }
						?>
            
<br>
<div class="education">
            <h4 class="edu">EDUCATION</h4>
            <p class="work_exp">I am looking to expand my profile while I am on top and while I am young!!</p>

          
            <br>
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
						$sql = "SELECT * FROM education";
						$results = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($results)){
						echo   '<div class="sec">';
                        echo    '<div class="left sk_left">';
						echo '<br>';
						echo '<p class="month">'.$row["startdate"].'-.</p>';
						echo '<p class="date">'.$row["enddate"].'</p>';
						echo '<p class="sub">'.$row["degree"].'</p>';
						echo '</div>';
						echo '<div class="right sk_right">';
                        echo '<div class="description">';
						echo '<p class="subj">'.$row["major"].'</p>';
						echo '<p class="desc">'.$row["university"].'</p>';
						echo '</div>';
						echo '</div>';
						 echo '</div>';
						
						
							}
                      mysqli_close($conn);
					  }
						?>
            
           
                

</body>
</html>