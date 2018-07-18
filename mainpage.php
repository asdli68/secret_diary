<?php include("login.php");
    session_start();
    include("connection.php");
    $query="SELECT diary FROM users WHERE id='".$_SESSION['id']."'LIMIT1";
    $result = mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    $diary = $row['diary'];
?>
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
  			<div class="navbar-header pull-left">
  				<a class="navbar-brand">Secret Diary</a>
  			</div>
  			<div class="pull-right">		
  				<ul class="navbar-nav nav pull-right">
  				    <li><a href="index.php?logout=1">Log Out</a></li>
  				</ul>
  			</div>
  		</div>
  	</div>
  	<div class="container contentContainer" id="topContainer">
  		<div class="row">	
  			<div class="col-md-6 col-md-offset-3" id="topRow">
  				<textarea class="form-control"><?php echo $diary ?></textarea>
  			</div>
  		</div>
  	</div>
  	<script>
        $(".contentContainer").css("min-height",$(window).height());
        $("textarea").css("min-height",$(window).height()*0.8);
        $("textarea").keyup(function(){
            $.post("updatediary.php",{diary:$(textarea).val()});
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
