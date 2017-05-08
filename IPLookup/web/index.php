<?php
/*
 * Copyright (c) 2017 by G3de Organisation
 * Pascal Rost (contact@pascalrost.de)
*/

include('core/core.php');

if(!empty($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
} else {
	$page = $_REQUEST['index'];
}

?>

<html>
<head>
	<title>Pi Stations</title>
</head>
<body>

<?php include('sites/'.$page.'.php'); ?>

</body>
</html>
