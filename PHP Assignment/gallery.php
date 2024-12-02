<!DOCTYPE html>

<html>
	<head>
		<title>Reading a File</title>
	</head>
	<body>

		<h1>Tags</h1>

<?php
$files = glob("Uploads/*.*");

for ($i=1; $i<count($files); $i++)
{
	$num = $files[$i];
  list($first, $upload_extension)= explode(".", $num);
  if($upload_extension == 'txt'){
    echo "<section>";
    // read the file into memory; if there is an error then stop processing
    $paintings = file($folder.$num) or die('ERROR: Cannot find file');

    // our data is comma-delimited
     $delimiter = ',';

    // loop through each line of the file
    foreach ($paintings as $painting) {
	  // returns an array of strings where each element in the array
	  // corresponds to each substring between the delimiters


	  $paintingFields = explode($delimiter, $painting);
	  $id= $paintingFields[0];
	  $artist = $paintingFields[1];
	  $title = $paintingFields[2];
	

	  // do something with this data
	  $imgTitle=$first . ".jpg" ;
    echo "<a href='".$imgTitle."'>\n$id</a>";
    echo "<a href='".$imgTitle."'>\n$title</a>";
    echo "<a href='".$imgTitle."'>\n$artist</a>";
    echo "</section>";
    } 
  }
  if($upload_extension == 'jpg' || $upload_extension == 'png') {
      echo "<div class='w3-container'>";
	    print $num."<br />";
	    echo '<img src="'.$num.'" alt="random image" />'."<br /><br />";
      echo "<link rel='stylesheet' type='text/css' href='stylesheet.css' />";
      $Textfilename= $first . ".txt";
       $file=fopen($Textfilename, "r+");
       echo fread($file,filesize($Textfilename));
       fclose($file);
       echo "</div>";
  }
}
?>
</body>
</html>
