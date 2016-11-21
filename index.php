<!doctype html>
<html lang="fr">
<head>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Traduction FR KH</title>
  	<link rel="stylesheet" href="css/style.css">
  	<link rel="stylesheet" href="css/dictionnaire.css">
  	<link rel="stylesheet" href="css/back-office.css">
  	<link rel="stylesheet" href="css/theme_tablesorter/theme.blue.css">
  	<link rel="stylesheet" href="css/theme_tablesorter/theme.green.css">
  	<link rel="stylesheet" href="css/theme_tablesorter/theme.grey.css">
  	<link rel="stylesheet" href="css/theme_tablesorter/theme.ice.css">
  	<link rel="stylesheet" href="css/theme_tablesorter/theme.materialize.css">
  	<link rel="stylesheet" href="css/theme_tablesorter/theme.metro-dark.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">
  	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.27.8/js/jquery.tablesorter.min.js"></script>	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/jquery.tablesorter.widgets.js"></script>
</head>

<body>
	<div id="entete">
		<h1>Traduction FR KH</h1>
		<div id="menu">
			<ul>
		    	<li><a href="#dictionnaire">Dictionnaire</a></li>
		  		<li><a href="#back-office">Back-office</a></li>
		  	</ul>
		  	<div id="dictionnaire">
		  		<?php include("dictionnaire.php"); ?>
			</div>
		  	<div id="back-office">
		  		<?php include("back-office.php"); ?>
		  	</div>
		</div>
	</div>
 
</body>
</html>