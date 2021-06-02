<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="formstyle.css">
</head>
<body>
<div class="header">
            <h2>Have a project you'd like to discuss</h2></div>
       
                <form action="contactus.php" method="post">

                    <?php include('errors.php'); ?>
                    
                    <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter a valid text" pattern="[A-Za-z]" title="ALPHABETS ONLY" value="<?php echo $name;?>"required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter a valid email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" title="ALPHABETS ONLY" value="<?php echo $email;?>"required>
        </div>
        <div class="input-group">
            <label>Message</label>
            <input type="text" name="message" placeholder="Enter a valid message more than 2 letters" pattern="[A-Za-z]" title="ALPHABETS ONLY" value="<?php echo $message;?>"required>
        </div>
              <div class="input-group">
            <button type="submit" name="contact_us" class="btn"><a href="mailto:bnithya97@gmail.com?Subject=Hello%20again" >SEND</a></button>
        </div>  
                
                
                </form>
            </body>
</html>