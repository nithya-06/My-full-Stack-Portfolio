<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
  <div>
    <h2>EDIT EDUCATION</h2>

    <form action="" id="modify_education" method="POST">
      Major:<br>
      <input type="text" name="major" placeholder="major">
      <br>
      Degree:<br>
      <input type="text" name="degree" placeholder="degree">
      <br>
      University<br>
      <input type="text" name=" university" placeholder="university">
      <br>
      Startdate:<br>
      <input type="text" name="startdate" placeholder="startdate">
      <br>
        Enddate:<br>
      <input type="text" name="enddate" placeholder="enddate">
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
if (!empty($_POST['major']) && !empty($_POST['degree'])  ) {
      $major = $_POST['major'];
      $degree = $_POST['degree'];
      $university = $_POST['university'];
    

      $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=nithyaba_project_1", "nithyaba_nithyabalasundar", "8c@nithya", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

      $dbh->beginTransaction();
      $dbh->exec("UPDATE education SET major='$major',university='$university' WHERE degree='$degree'");
      $dbh->commit();
      print "Successfully Updated";
	   unset($_POST['major'],$_POST['degree'],$_POST['university']);
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
