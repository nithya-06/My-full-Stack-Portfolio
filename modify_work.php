

<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
  <div>
    <h2>EDIT LATEST WORK</h2>

    <form action="" id="modify_work" method="POST">
      worktitle<br>
      <input type="text" name="worktitle" placeholder="worktile">
      <br>
      workdesc<br>
      <input type="text" name="workdesc" placeholder="workdesc">
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
if (!empty($_POST['worktitle']) && !empty($_POST['workdesc'])) {
      $worktitle = $_POST['worktitle'];
      $workdesc = $_POST['workdesc'];
     

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=nithyaba_project_1", "nithyaba_nithyabalasundar", "8c@nithya", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("UPDATE latestwork SET worktitle='$worktitle' WHERE workdesc='$workdesc'");
      $dbh->commit();
      print "Successfully Updated";
	   unset($_POST['worktitle'],$_POST['workdesc']);
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
