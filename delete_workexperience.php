<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
  <div>
    <h2>DELETE work experience</h2>

    <form action="" id="delete_workexperience" method="POST">
    DELETE FIELD<br>
    <input type="text" name="jobposition" placeholder="Enter jobposition">
    <br>
    <button>DELETE</button>
    <input type="submit" value="CLEAR">
    </div>
    </form>

<?php
$showdiv = false;
if  (!empty($_POST['jobposition'])) {
    $jobposition = $_POST['jobposition'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=nithyaba_project_1", "nithyaba_nithyabalasundar", "8c@nithya", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM workexperience WHERE jobposition='$jobposition'");
      $dbh->commit();
      print "Successfully deleted";
	  unset($_POST['jobposition']);
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