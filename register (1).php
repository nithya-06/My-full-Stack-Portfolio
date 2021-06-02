<?php include('server.php') ?>

<html>
    <head>
        	<title>Register</title>
        <link rel="stylesheet" type="text/css" href="formstyle.css">
    </head>
<body>
<script>
  
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  
<body>  
<form name="myform" method="post" action="register.php" onsubmit="return validateform()" >  
Name: <input type="text" name="name"><br/>  
LastNAme:<input type="text" name="lastname"></br>
Username:<input type="text" name="username"></br>
Password: <input type="password" name="password"><br/> 
Email:<input type="email" name="email"></br>
Confirm Password:<input type="password" name="password"></br>
<input type="submit" value="register">  
</form>  
</body>
</html>

 