<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>

<body>
  <div>
    <h2>EDIT HIREME</h2>

    <form action="" id="modify_hireme" method="POST">
      PRICE<br>
      <input type="text" name="price" placeholder="price">
      <br>
      SUB<br>
      <input type="text" name="sub" placeholder="sub">
      <br>Desc0<br>
      <input type="text" name="desc0" placeholder="desc0">
      <br>
      Desc1<br>
      <input type="text" name="desc1" placeholder="desc1">
      <br>Desc2<br>
      <input type="text" name="desc2" placeholder="desc2">
      <br>
      Desc3<br>
      <input type="text" name="desc3" placeholder="desc3">
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
if (!empty($_POST['price']) && !empty($_POST['sub']) ) {
      $price = $_POST['price'];
      $sub = $_POST['sub'];
     
 
     $dbh = new PDO("mysql:host=127.0.0.1:3306;dbname=nithyaba_project_1", "nithyaba_nithyabalasundar", "8c@nithya", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

     
      $dbh->beginTransaction();
      $dbh->exec("UPDATE hireinfo SET  sub='$sub' WHERE price='$price'");
      $dbh->commit();
      print "Successfully Updated";
	   unset($_POST['price'],$_POST['sub']);
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