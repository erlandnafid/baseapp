<?php
	include("config/database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Base App</title>
	<?php include("include/head.php"); ?>
</head>
<body>
	<?php include("include/header.php"); ?>

	<div class="login">
	<div class="container">
		<div class="col-lg-6 col-lg-offset-3">
				<div class="inner-form">
					<h1>Contact Us</h1> 
					<form role="form">
						<div class="row">
							<div class="col-lg-12">
								<label>Email</label>
								<div class="form-group">
									<input type="email" name="email" id="email" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-lg-12">
								<label>Password</label>
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control" placeholder="">
								</div>
							</div>
							<div class="col-lg-12">
								<button type="submit" class="btn btn-default">
									<span>LOGIN</span>
								</button>
							</div>
							<div class="col-lg-12">
								<div class="forgot">
									<p>Forgot Password or Email ?</p>
								</div>
							</div>
						</div>
					</form>
				</div> <!-- inner-form -->
			</div>   
		</div>   
	</div>  

	<?php include("include/footer.php"); ?>
</body>
</html>
