<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
    
</head>
    <body>
        <div class="header" >

          <h2>ADD CART</h2></div>
           
                <form action="add_hireme.php" method="post">

                    <?php include('errors.php'); ?>
                    
                    <div class="input-group">
                <label>PRICE</label>
            <input type="text" name="price" >
        </div>
        <div class="input-group">
            <label>SUBJECT</label>
            <input type="text" name="subject" >
        </div>
        <div class="input-group">
            <label>DESC0</label>
            <input type="text" name="description0" >
        </div>
         <div class="input-group">
            <label>DESC1</label>
            <input type="text" name="description1" >
        </div>
         <div class="input-group">
            <label>DESC2</label>
            <input type="text" name="description2" >
        </div>
        <div class="input-group">
            <label>DESC3</label>
            <input type="text" name="description3" >
        </div> 
              <div class="input-group">
            <button type="submit" name="add_hireme" class="btn">ADD</button>
        </div>  
                
                
                </form>
           </body>
</html>