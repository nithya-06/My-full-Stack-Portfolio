<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
    <body>
            <div class="header">
            <h2>ADD EDUCATION </h2> </div>
            
                <form action="add_education.php" method="post">

                    <?php include('errors.php'); ?>
                    
                    <div class="input-group">
            <label>Major</label>
            <input type="text" name="major" value="<?php echo $major;?>" >
        </div>
        <div class="input-group">
            <label>Degree</label>
            <input type="text" name="degree" value="<?php echo $degree;?>">
        </div>
        <div class="input-group">
            <label>University</label>
            <input type="text" name="university" value="<?php echo $university;?>">
        </div>
         <div class="input-group">
            <label>Start Date</label>
            <input type="text" name="startdate" value="<?php echo $startdate;?>">
        </div>
         <div class="input-group">
            <label>End Date</label>
            <input type="text" name="enddate" value="<?php echo $enddate;?>">
        </div>
              <div class="input-group">
            <button type="submit" name="add_education" class="btn">ADD</button>
        </div>  
                
                
                </form>
    </body>
</html>