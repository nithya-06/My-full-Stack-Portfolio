<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
  <div>
    <h2>DELETE EDUCATION</h2>

    <form action="" id="delete_education" method="POST">
    UniversityName:<br>
    <input type="text" name="university" placeholder="Enter UniversityName">
    <br>
    <button>DELETE</button>
    <input type="submit" value="CLEAR">
    </div>
    </form>

<?php
$showdiv = false;
if  (!empty($_POST['university'])) {
    $university = $_POST['university'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=nithyaba_project_1", "nithyaba_nithyabalasundar", "8c@nithya", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM education WHERE university='$university'");
      $dbh->commit();
      print "Successfully deleted";
	  unset($_POST['university']);
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