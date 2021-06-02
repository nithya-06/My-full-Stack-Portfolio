<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
  <div>
    <h2>DELETE LATEST WORK</h2>

    <form action="" id="delete_work" method="POST">
    Work Title<br>
    <input type="text" name="worktitle" placeholder="Enter work">
    <br>
    <button>DELETE</button>
    <input type="submit" value="CLEAR">
    </div>
    </form>

<?php
$showdiv = false;
if  (!empty($_POST['worktitle'])) {
    $worktitle = $_POST['worktitle'];
      
      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=nithyaba_project_1", "nithyaba_nithyabalasundar", "8c@nithya", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("DELETE FROM latestwork WHERE worktitle='$worktitle'");
      $dbh->commit();
      print "Successfully deleted";
	  unset($_POST['worktitle']);
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