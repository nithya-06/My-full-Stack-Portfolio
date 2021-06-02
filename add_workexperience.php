<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
    <div class="header">
           <h2>ADD WORKEXPERIENCE</h2></div>
        
                <form action="add_workexperience.php" method="post">

                    <?php include('errors.php'); ?>
                    
                    <div class="input-group">
            <label>JOB TITLE</label>
            <input type="text" name="jobtitle" >
        </div>
        <div class="input-group">
            <label>WORK DESCRIPTION</label>
            <input type="text" name="workdescription">
        </div>
        <div class="input-group">
            <label>JOB POSITION</label>
            <input type="text" name="jobposition">
        </div>
         <div class="input-group">
            <label>COMPANY NAME</label>
            <input type="text" name="companyname">
        </div>
        <div class="input-group">
            <label>Start Date</label>
            <input type="text" name="startdate">
        </div>
         <div class="input-group">
            <label>End Date</label>
            <input type="text" name="enddate">
        </div>
              <div class="input-group">
            <button type="submit" name="add_workexperience" class="btn">ADD</button>
        </div>  
                
                
                </form>
            
</body>
</html>