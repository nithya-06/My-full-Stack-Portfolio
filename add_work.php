<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
         
         <body>
             <div class="header">
         <h2>ADD WORK</h2></div>
        
        
                <form action="add_work.php" method="post">

                    <?php include('errors.php'); ?>
                    
                    <div class="input-group">
            <label>Work title</label>
            <input type="text" name="worktitle" >
        </div>
        <div class="input-group">
            <label>Work Description </label>
            <input type="text" name="workdescription">
        </div>
        
              <div class="input-group">
            <button type="submit" name="add_work" class="btn">ADD</button>
        
                
                </form>
            
</body>
</html>