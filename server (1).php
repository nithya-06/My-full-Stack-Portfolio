<?php 
	session_start();

	// variable declaration
	$name = "";
	$lastname = "";
	$username = "";
	$email    = "";
	$password_1 =""; 
	$password_2 = "";
	$message = "";
	$major ="";
	$degree ="";
	$university ="";
	$startdate ="";
	$enddate ="";
	$worktitle = "";
	$workdescription = "";
	$price = "";
	$subject = "";
	$description0 = "";
	$description1 ="";
	$description2 = "";
	$description3 = "";
	$results="";
	$results1="";
	$query="";
	$query1="";
	$errors = array(); 
	$_SESSION['success'] = "";
	$host = "127.0.0.1:3306";

	// connect to database
	$db = mysqli_connect($host, 'nithyaba_nithyabalasundar', '8c@nithya', 'nithyaba_project_1');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($lastname)) { array_push($errors, "Lastname is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (name,lastname,username, email, password) 
					  VALUES('$name','$lastname','$username', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
		}

	}

	// 


	// LOGIN USER
	if (isset($_POST['login_user'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0){
		    
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
		   if (mysqli_num_rows($results) == 1){
			    
			    $_SESSION['username'] = $username;
			    $_SESSION['password'] = $password;
			    $_SESSION['success'] = "You are now logged in"; 
			    header('http://nithyabalasundar.uta.cloud/balasundar_project4/home.html');
			    if($username=="nithya97")
			    {
			            header('http://nithyabalasundar.uta.cloud/balasundar_project4/admin_skill.html');
			    }
			    
			else 
			{
	            array_push($errors, "Wrong username/password combination");
			}
				
		   }
		
		
			
			
			
		}
		
	    
    }
	
	
		
		
	

//CONTACT FORM
	if (isset($_POST['contact_us'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$message = mysqli_real_escape_string($db, $_POST['message']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($message)) { array_push($errors, "Message is required"); }

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO contactform (name, email, message) 
					  VALUES('$name', '$email', 'message')";
			mysqli_query($db, $query);

		
			header('location:admin_skill.html ');
		}

	}

//add to education
	if (isset($_POST['add_education'])) {
		// receive all input values from the form
		$major = mysqli_real_escape_string($db, $_POST['major']);
		$degree = mysqli_real_escape_string($db, $_POST['degree']);
		$university = mysqli_real_escape_string($db, $_POST['university']);
		$startdate = mysqli_real_escape_string($db, $_POST['startdate']);
		$enddate = mysqli_real_escape_string($db, $_POST['enddate']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($major)) { array_push($errors, "Major is required"); }
		if (empty($degree)) { array_push($errors, "Degree is required"); }
		if (empty($university)) { array_push($errors, "University is required"); }
		if (empty($startdate)) { array_push($errors, "StartDate is required"); }
		if (empty($enddate)) { array_push($errors, "End date is required"); }

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO education (major,degree,university,startdate,enddate) 
					  VALUES('$major', '$degree', '$university','$startdate','$enddate')";
			mysqli_query($db, $query);
            	$_SESSION['message'] = "Education added"; 
		
			header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}

	}

//add to work experience 

	if (isset($_POST['add_workexperience'])) {
		// receive all input values from the form
		$jobtitle = mysqli_real_escape_string($db, $_POST['jobtitle']);
		$workdescription = mysqli_real_escape_string($db, $_POST['workdescription']);
		$jobposition = mysqli_real_escape_string($db, $_POST['jobposition']);
		$companyname = mysqli_real_escape_string($db, $_POST['companyname']);
		$startdate = mysqli_real_escape_string($db, $_POST['startdate']);
		$enddate = mysqli_real_escape_string($db, $_POST['enddate']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($jobtitle)) { array_push($errors, "Job title is required"); }
		if (empty($workdescription)) { array_push($errors, "Work Description is required"); }
		if (empty($jobposition)) { array_push($errors, "Job positionis required"); }
		if (empty($companyname)) { array_push($errors, "Companyname is required"); }
		if (empty($startdate)) { array_push($errors, "StartDate is required"); }
		if (empty($enddate)) { array_push($errors, "End date is required"); }

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO workexperience (jobtitle,workdescription,jobposition,companyname,startdate,enddate) 
					  VALUES('$jobtitle', '$workdescription', '$jobposition','$companyname','$startdate','$enddate')";
			mysqli_query($db, $query);
            	$_SESSION['message'] = "Work experience added"; 
		
			header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}

	}

//add to hireme

	if (isset($_POST['add_hireme'])) {
		// receive all input values from the form
		$price = mysqli_real_escape_string($db, $_POST['price']);
		$subject = mysqli_real_escape_string($db, $_POST['subject']);
		$desc0 = mysqli_real_escape_string($db, $_POST['desc0']);
	    $desc1 = mysqli_real_escape_string($db, $_POST['desc1']);
		$desc2 = mysqli_real_escape_string($db, $_POST['desc2']);
		$desc3 = mysqli_real_escape_string($db, $_POST['desc3']);
		
		// form validation: ensure that the form is correctly filled
	/*	if (empty($price )) { array_push($errors, "Price is required"); }
		if (empty($subject)) { array_push($errors, "Subject  is required"); }
		if (empty($desc0)) { array_push($errors, "Description0 is required"); }
		if (empty($desc1)) { array_push($errors, "Description1  nameis requred");}
		if (empty($desc2)) { array_push($errors, "Description2 is required"); }
	if (empty($desc3)) { array_push($errors, "Description3 is required"); }*/
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO hireinfo (price,sub,desc0,desc1,desc2,desc3)
			VALUES('$price', '$sub', '$desc0','$desc1','$desc2','$desc3')";
			mysqli_query($db, $query);
            	$_SESSION['message'] = "a cart has been added"; 

			header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}

	}
//add to work
	if (isset($_POST['add_work'])) {
		// receive all input values from the form
		$worktitle = mysqli_real_escape_string($db, $_POST['worktitle']);
		$workdesc = mysqli_real_escape_string($db, $_POST['workdesc']);
	
		
		// form validation: ensure that the form is correctly filled
		if (empty($worktitle )) { array_push($worktitle, "work title is required"); }
		if (empty($workdesc)) { array_push($workdesc, "work description is required"); }
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO latestwork (worktitle,workdesc)
			VALUES('$worktitle', '$workdesc')";
			mysqli_query($db, $query);
			$_SESSION['message'] = "Work added"; 


			header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}
    }

//modify contents to education table
if (isset($_POST['modify_education'])) {
		// receive all input values from the form
		$major = mysqli_real_escape_string($db, $_POST['major']);
		$degree = mysqli_real_escape_string($db, $_POST['degree']);
		$university = mysqli_real_escape_string($db, $_POST['university']);
		$startdate = mysqli_real_escape_string($db, $_POST['startdate']);
		$enddate = mysqli_real_escape_string($db, $_POST['enddate']);
		
		// form validation: ensure that the modify  is correctly filled
		if (empty($major)) { array_push($errors, "Enter the major to be changed"); }
		if (empty($degree)) { array_push($errors, "Enter the degree to be changed"); }
		if (empty($university)) { array_push($errors, "Enter the University to be changed"); }
		if (empty($startdate)) { array_push($errors, "Enter the Startdate to be modified"); }
		if (empty($enddate)) { array_push($errors, "Enter the End date to be changed"); }

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE   education SET major='$major',degree='$degree' , university='$university' , startdate = '$startdate', enddate = '$enddate'";
					  
			mysqli_query($db, $query);
            	$_SESSION['message'] = "Education modified"; 
		
			header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}

	}


//modify contents to worexperience table
if (isset($_POST['modify_workexperience'])) {
		// receive all input values from the form
		$jobtitle = mysqli_real_escape_string($db, $_POST['jobtitle']);
		$workdescription = mysqli_real_escape_string($db, $_POST['workdescription']);
		$jobposition = mysqli_real_escape_string($db, $_POST['jobposition']);
		$companyname = mysqli_real_escape_string($db, $_POST['companyname']);
		$startdate = mysqli_real_escape_string($db, $_POST['startdate']);
		$enddate = mysqli_real_escape_string($db, $_POST['enddate']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($jobtitle)) { array_push($errors, "Job title is required"); }
		if (empty($workdescription)) { array_push($errors, "Work Description is required"); }
		if (empty($jobposition)) { array_push($errors, "Job positionis required"); }
		if (empty($companyname)) { array_push($errors, "Companyname is required"); }
		if (empty($startdate)) { array_push($errors, "StartDate is required"); }
		if (empty($enddate)) { array_push($errors, "End date is required"); }

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE workexperience SET jobtitle='$jobtitle',workdescription='$workdescription',jobposition='$jobposition',companyname='$companyname',startdate='$startdate',enddate='$enddate'"; 
					 
			mysqli_query($db, $query);
            	$_SESSION['message'] = "Work experience has been added"; 
		
			header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}

    }

//modify to hireme

	if (isset($_POST['modify_hireme'])) {
		// receive all input values from the form
		$price = mysqli_real_escape_string($db, $_POST['price']);
		$subject = mysqli_real_escape_string($db, $_POST['subject']);
		$desc0 = mysqli_real_escape_string($db, $_POST['desc0']);
		$desc1 = mysqli_real_escape_string($db, $_POST['desc1']);
		$desc2 = mysqli_real_escape_string($db, $_POST['desc2']);
		$desc3 = mysqli_real_escape_string($db, $_POST['desc3']);
		
		// form validation: ensure that the form is correctly filled
		if (empty($price )) { array_push($errors, "Price is required"); }
		if (empty($subject)) { array_push($errors, "Subject  is required"); }
		if (empty($desc0)) { array_push($errors, "Description0 is required"); }
		if (empty($desc1)) { array_push($errors, "Description1  nameis requred");}
		if (empty($desc2)) { array_push($errors, "Description2 is required"); }
	if (empty($desc3)) { array_push($errors, "Description3 is required"); }
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE  INTO hire info SET price='$price',sub='$sub',desc0='$desc0',desc1='$desc1',desc2='$desc2',desc3='$desc3'";
		
			mysqli_query($db, $query);
            	$_SESSION['message'] = "A cart has been modified"; 

			header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}

	
	}
	
	
//modify  work


	if (isset($_POST['modify_work'])) {
		// receive all input values from the form
		$worktitle = mysqli_real_escape_string($db, $_POST['worktitle']);
		$workdescription = mysqli_real_escape_string($db, $_POST['workdescription']);
	
		
		// form validation: ensure that the form is correctly filled
		if (empty($worktitle )) { array_push($worktitle, "work title is required"); }
		if (empty($workdescription)) { array_push($workdescription, "work description is required"); }
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "UPDATE latest works SET WORK_TITLE ='$worktitle' WORK _DESC='$workdescription'";
			mysqli_query($db, $query);
			$_SESSION['message'] = "Work modified"; 
        header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}
	}
    
//delete from education


	if (isset($_POST['delete_education'])) {
		// receive all input values from the form
		$major = mysqli_real_escape_string($db, $_POST['major']);
	
		
		// form validation: ensure that the form is correctly filled
		if (empty($major)) { array_push($errors, "Type the major to be deleted"); }
	
		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "DELETE  FROM education WHERE major=$major";
			mysqli_query($db, $query);
            $_SESSION['message'] = " One row in Education  deleted"; 
		
			header('location: http://nithyabalasundar.uta.cloud/balasundar_portfolio_pro3/home.html');
		}
}
	
///delete from work experience 

	if (isset($_POST['delete_workexperience'])) {
		// receive all input values from the form
	
		$companyname = mysqli_real_escape_string($db, $_POST['companyname']);
	
		// form validation: ensure that the form is correctly filled
		
		if (empty($companyname)) { array_push($errors, "Type the Companyname to be deleted"); }
	

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "DELETE  FROM workexperience WHERE companyname=$companyname";
			mysqli_query($db, $query);
            	$_SESSION['message'] = "One row  in Work experience is deleted"; 
		
			header('location: http://nithyabalasundar.uta.cloud/balasundar_project4/home.html');
		}
	}

	

//delete from  hireme

	if (isset($_POST['delete_hireme'])) {
		// receive all input values from the form
		$price = mysqli_real_escape_string($db, $_POST['price']);
	
		
		// form validation: ensure that the form is correctly filled
		if (empty($price )) { array_push($errors, "Price is required"); }

		
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "DELETE  FROM hireinfo info WHERE price=$price";
            	$_SESSION['message'] = "a cart has been deleted"; 

			header('location: http://nithyabalasundar.uta.cloud/balasundar_project4/home.html');
		}

		}


//delete from work
	if (isset($_POST['delete_work'])) {
		// receive all input values from the form
		$worktitle = mysqli_real_escape_string($db, $_POST['worktitle']);
		
	
		
		// form validation: ensure that the form is correctly filled
		if (empty($worktitle )) { array_push($worktitle, "work title is required"); }
	
		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "DELETE work FROM latest works WHERE worktitle=$worktitle";
			mysqli_query($db, $query);
			$_SESSION['message'] = "Deleted"; 


			header('location: http://nithyabalasundar.uta.cloud/balasundar_project4/home.html');
		}
    }

?>