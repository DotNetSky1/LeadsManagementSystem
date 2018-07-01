
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>Insert title here</title>
	
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/styles.css" />
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	
	
</head>
<body class="hold-transition skin-blue sidebar-mini">


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
         </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
	  
      <li><a href="/LMS/index.php/User/addUser/addUser.php">Create User</a></li>
      <li><a href="/LMS/index.php/User/CreateLead">Create Lead</a></li>
	  <li><a href="#">User Queries</a></li>
      <li><a href="#">Events</a></li>
    
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
	

<div class="container">
<div class="signup-form">
    <form method="post" action="">
		<h2>Create Leads</h2>

        
        <div class="form-group">
        <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
         <input type="text" class="form-control" name="leadname" placeholder="Name" required="required">
            
        </div>    
        </div>
		
		<div class="form-group">
        <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
         <input type="text" class="form-control" name="mobile" placeholder="mobile" required="required">
            
        </div>    
        </div>
		
            
               <div class="form-group">
         <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="cityname" placeholder="Enter City" required="required">
           
        </div>
        </div>

      
        <div class="form-group">
         <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="remarks" placeholder="Remarks" required="required">
        </div>
        </div>

		<div class="form-group">
         <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        </div>


<div class="form-group">
         <div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="date" class="form-control" name="leaddate" required="required">
        </div>
        </div>	



		
		<div class="form-group">            
            <input type="submit" name="save" class="btn btn-primary" value="Create"/>
        </div>    
    </form>

</div>
</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="/assets/bootstrap/js/bootstrap.min.js"></script>


</body>
</html>
 
