<!DOCTYPE html>

<html>
	<head>
		<title>Reading a File</title>
	</head>
	<body>

		<h1>Reading a text file</h2>

<?php

$folder = "./Uploads/";
$filename="20180903_203918.txt";

// read the file into memory; if there is an error then stop processing
$paintings = file($folder.$filename) or die('ERROR: Cannot find file');

// our data is comma-delimited
$delimiter = ',';

// loop through each line of the file
foreach ($paintings as $painting) {
	// returns an array of strings where each element in the array
	// corresponds to each substring between the delimiters

	//echo $painting . "<br>";


	$paintingFields = explode($delimiter, $painting);
	$id= $paintingFields[0];
	$artist = $paintingFields[1];
	$title = $paintingFields[2];
	

	// do something with this data
	echo "Painting $id, $title by $artist, painted in<br>";

}

?>

	</body>
</html>