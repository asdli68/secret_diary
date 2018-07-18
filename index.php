<?php include("login.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Secret Diary</title>
      <style>
		.navbar-brand {
			font-size:1.8em;
			font-weight:bold;
		}
		#topContainer {
			background-image:url("background.jpg");
			height:400px;
			background-size:cover;
			width:100%;
		}
		#topRow {
			margin-top:100px;
			text-align:center;
		}
		#topRow h1 {
			font-size:3em;
		}
		.bold {
			font-weight:bold;
		}
		.marginTop {
			margin-top:30px;
		}
		.center {
			text-align:center;
		}
		.title {
			margin-top:100px;
			font-size:3em;
		}
		#footer {
			background-color:#E98C6D;
			width:100%;
		}
		.appstoreImage {
			width:300px;
		}
		.marginBottom {
			margin-bottom:30px;
		}
		.white {
			color:white;
		}
    </style>
  </head>
  <body>
   <div class="navbar navbar-default navbar-fixed-top">
  		<div class="container">
  			<div class="navbar-header">
  				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand">Secret Diary</a>
  			</div>
  			<div class="collapse navbar-collapse">		
  				<form class="navbar-form navbar-right" method="post">
  					<div class="form-group">
  						<input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>"/>
  					</div>
  					<div class="form-group">
  						<input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  					</div>
  					<input type="submit" name="submit" class="btn btn-success" value="Log In" >
  				</form>
  			</div>
  		</div>
  	</div>
  	<div class="container contentContainer" id="topContainer">
  		<div class="row">	
  			<div class="col-md-6 col-md-offset-3" id="topRow">
  				<h1 class="marginTop white">Secret Diary</h1>
  				<p class="lead white">Your own private diary, with you wherever you go.</p>
				<?php
					if ($error) {
						echo '<div class="alert alert-danger">'.addslashes($error).'</div>';	
					}
					if ($message) {
						echo '<div class="alert alert-success">'.addslashes($message).'</div>';
					}
				?>
  				<p class="bold white">Interested? Sign Up Below!</p>
  				<form method="post">
  					<div class="form-group">
  						<label for="email" class="white">Email Address</label>
  						<input type="email" name="email" class="form-control" placeholder="Your email" value="<?php echo addslashes($_POST['email']); ?>" />
  					</div>
  					<div class="form-group">
  						<label for="password" class="white">Password</label>
  						<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo addslashes($_POST['password']); ?>" />
  					</div>
  						<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop">
  				</form>
  			</div>
  		</div>
  	</div>
    <script>
        $(".contentContainer").css("min-height",$(window).height());
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
