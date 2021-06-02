

<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
  <div>
    <h2>EDIT WORK EXPERIENCE</h2>

    <form action="" id="modify_workexperience" method="POST">
     jobtitle<br>
      <input type="text" name="jobtitle" placeholder="jobtitle">
      <br>
      workdescription<br>
      <input type="text" name="workdescription" placeholder="workdescription">
      <br>
      jobposition<br>
      <input type="text" name="jobposition" placeholder="jobposition">
      <br>
       companyname<br>
      <input type="text" name="companyname" placeholder="companyname">
      <br>
      startdate<br>
      <input type="text" name="startdate" placeholder="startdate">
      <br>
      endate<br>
      <input type="text" name="enddate" placeholder="enddate">
      <br>
      <br>
      <br>
      <br>
      <input type="submit" value="CLEAR">
      <input type="submit" value="UPDATE">
    </form>
  </div>

  </form>

  <div>
<?php
 $showdiv = false;
if (!empty($_POST['jobtitle']) && !empty($_POST['companyname'])) {
      $jobtitle = $_POST['jobtitle'];
      $companyname = $_POST['companyname'];
     

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=nithyaba_project_1", "nithyaba_nithyabalasundar", "8c@nithya", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("UPDATE workexperience SET jobtitle='$jobtitle' WHERE companyname='$companyname'");
      $dbh->commit();
      print "Successfully Updated";
	   unset($_POST['jobtitle'],$_POST['companyname']);
      $showdiv = true;


        
      } 
    
?>

 <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
        
</body>

</html>
