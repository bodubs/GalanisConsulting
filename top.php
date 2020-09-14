<!DOCTYPE HTML>
<html lang="en">
<head>

	<title>Galanis Consulting</title>

	<meta charset="utf-8">
    <meta name="author" content="Nukabird">
    <meta name="description" content="Galanis Consulting LLC">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="style.css" type="text/css" media="screen">


	<!-- ####################### Initializing PHP variables #################### -->
	<?php

	define ('PHP_SELF', htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, 'UTF-8'));

	$PATH_PARTS = pathinfo(PHP_SELF);

	?>
	<!-- ####################### END Initializing PHP variables #################### -->

</head>

<!-- **********************     Body section      ********************** -->
<?php

print '<body id="' . $PATH_PARTS['filename'] . '">';
    
include 'header.php';
    
?>