<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ipsum, Inc.</title>
	<meta name="description" content="Your #1 source for senseless gibberish. Check us out today and see why no one knows what we're talking about.">

	<link rel="stylesheet" href="styles/site.css">

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<?php

	// TODO: CREATE FUNCTIONS PAGE

	include('functions.php');

	//Determine the active page (function)
	$pageId = currentPage();
	// echo $pageId;

	//Get data for the page (function)
	$pageData = pageData();
	// print_r($pageData)

?>


<body class="<?=$pageId?>">
	<?php

		include('templates/pages/default-page.php');

	?>



</body>


</html>