<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<div class="container form">
		<div class="row">
			<div class="col-md-12 col-sm-12" >
				<form class="sign" action="post_action.php" method="POST">
					<h4 class="text-center heading">Sign IN</h4>
					<hr class="hr">
					<label class="label">Name:</label>
            		<input type="text" name="name" class="form-control" placeholder="Enter your name"/>
            		<label class="label">Email:</label>
            		<input type="text" name="email" class="form-control" placeholder="Enter your email"/>
            		<label class="label">Gender:</label>
		            <div class="custom-control custom-radio">
		                <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="male">
		                <label class="custom-control-label label" for="customRadio1">Male</label>
		            </div>
		            <div class="custom-control custom-radio">
		                <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="female">
		                <label class="custom-control-label label" for="customRadio2">Female</label>
		            </div>
		            <label class="label">Hobby:</label>
	                <div class="form-check">
	                    <input class="form-check-input position-static" type="checkbox" name="hobby[]"  value="music" aria-label="...">
	                    <label for="music" class="label">music</label>
	                </div>
	                <div class="form-check">
	                    <input class="form-check-input position-static" type="checkbox" name="hobby[]"  value="sports" aria-label="...">
	                    <label for="music" class="label">Sports</label>
	                </div>
	                <div class="form-check">
	                    <input class="form-check-input position-static" type="checkbox" name="hobby[]" value="Singing" aria-label="...">
	                    <label for="music" class="label">Singing</label>
	                </div>
	                <button class="btn btn-primary" type="submit">submit</button>
				</form>
			</div>
		</div>
		</div>
	</body>
</html>