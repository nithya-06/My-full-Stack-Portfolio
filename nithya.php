<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <div style="background-color: #00101f">
      <nav>
          <ul>
            <li class="number1" ><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_proj3/home.html">NITHYA BALASUNDAR</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html">Home</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/skill.html">My Skills</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/recommendation.html">Recommendation</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/latestwork.html">Latest Works</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/">Blog</a></li>
          <li><a href="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/hire.html"><a href="hire.html">Hire Me</a></li>
          <li onclick="document.getElementById('login').style.display='block';">Log in</li>
          <li onclick="document.getElementById('checkin').style.display='block';">Sign up</li>
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
            </div>
  
            <div class="footer">
              <button class="primaryBtn">Save</button>
              <button class="primaryBtn" onclick="document.getElementById('login').style.display='none';">Close</button>
              
          </div>
      </div>
      <br>
      <br>
      <h1 style="color:white" ><font face="Rajdhani">MY LATEST WORK</font></h1>
      <p style="color:white">I am looking to expand my portfolio while I am on top and while I am young!!</p>
      <br>
      <br>
      <br>
      <button class="button1" >Show All</button>   

  <button class="button1"  >Websites</button>   

  <button class="button1"  >Design</button>
  <button class="button1" > Photography</button>
<br>
<div class="work">
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
						$sql = "SELECT * FROM latestwork";
						$results = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_array($results)){
							    echo '<br>';
						echo $row["worktitle"];
						echo $row["workdesc"];
						
						 echo '<br>';
						 echo '<br>';
						 echo '<br>';
						
						
							}
                      mysqli_close($conn);
					  }
			        ?>
  <table style="border-spacing: 25px 30px;">
    <tr>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_1.PNG" height="150" width="150" ></td>
      <td><font color="white"><br>APPS<br>Websites</td><br>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_2.PNG" height="150" width="150" ></td>
      <td><font color="white">PLAYER PASS LIST<br>Websites</td>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_3.PNG" height="150" width="150" ></td>
      <td><br><font color="white"> STAFF TRAINING<br> websites</td>
    </tr><br>
    <tr>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_4.PNG" height="150" width="150" ></td>
      <td><font color="white">ASGARDIA ACADEMY<br>websites</td>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_5.PNG"height="150" width="150" ></td>
      <td><font color="white">MI ABC<br>apps</td>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_6.jpg" height="150" width="150" ></td>
      <td><font color="white">XYZ<br>apps</td>
    </tr>
     <tr>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_7.JPG" height="150" width="150" ></td>
      <td><font color="white">STAFF TRAINING<br>apps</td>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_8.PNG"height="150" width="150" ></td>
      <td><font color="white">3D DESIGN<br>Blender</td>
      <td><img src="http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/app_9.PNG" height="150" width="150" ></td>
      <td><font color="white">3D DESIGN<br> Blender</td>
    </tr>
</table>
</div>
</body>
</html>