<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>albums</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>
	<link rel="stylesheet" href="lightbox.css" type="text/css" />
<script type="text/javascript" src="lightbox.js"></script>
</head>

<body>
	<!--top bar-->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">網路實業商城</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <a href="uploadfrom.php"><button type="button" class="btn btn-danger">Upload</button></a>
    <a href="albums.php"><button type="button" class="btn btn-danger">albums</button></a>
    <br>
    <div style="width:100%; height:60%;">
        	<?php
				$folder = 'upload/';
				$filetype = '*.*';
				$file = glob($folder.$filetype);
				$count = count($file);
				for ($i = 0; $i < $count; $i++) {
					echo '<a href="'.$file[$i].'" rel="lightbox"><img src="'.$file[$i].'" width="150px" height="150px"/>';
				}
			?>
        </div>


</body>
</html>
