	<?php
    
$validExt = array("jpg", "png");
$validMime = array("image/jpeg","image/png");
$extension = end(explode(".", $fileArray["1file"]));

//if (in_array($fileArray["type"],$validMime) && in_array($extension, $validExt)) {
		if(isset($_FILES['1file']))
		{
			//Code for file 1
     $file1tag1= $_POST['tag1'];
     $file1tag2=$_POST['tag2'];
     $file1tag3=$_POST['tag3'];

   //Accessing the file information
			$file1_name = $_FILES["1file"]["name"];
			$file1_temp_location = $_FILES['1file']['tmp_name'];
			//echoing the file information
			echo "File name: " . $file1_name . "<br>";
			echo "Temp location: " . $file1_temp_location . "<br>";
	//Moving the file to a permanent location on the server, may not work on DC server
			$destination = "./Uploads/" . $file1_name;      
      
      //writing text file
      $foldername="./Uploads/";
      $TxtString1= $file1tag1 . "," . $file1tag2 . "," . $file1tag3;
      list($first, $last) = explode(".", $file1_name);
      $TextFileName=$first . ".txt";
      file_put_contents($foldername.$TextFileName, $TxtString1 );

		

			if (move_uploaded_file($file1_temp_location, $destination)) {
				echo "The file ". $file1_name . " has been uploaded and moved to " . $destination . ".";
			}
			else {
				echo "Sorry, there was an error uploading your file.";
			}

		}
//}
		//else
		//{
			//echo "<p>No file uploaded yet</p>";
		//}

	 //Code for file 2 
$validExt = array("jpg", "png");
$validMime = array("image/jpeg","image/png");
$extension = end(explode(".", $fileArray["2file"]));
if (in_array($fileArray["type"],$validMime) && in_array($extension, $validExt)) {

		if(isset($_FILES['2file']))
		{
	 
     $file2tag4= $_POST['tag4'];
     $file2tag5=$_POST['tag5'];
     $file2tag6=$_POST['tag6'];

   //Accessing the file information
			$file2_name = $_FILES["2file"]["name"];
			$file2_temp_location = $_FILES['2file']['tmp_name'];
			//echoing the file information
			echo "File name: " . $file2_name . "<br>";
			echo "Temp location: " . $file2_temp_location . "<br>";
	//Moving the file to a permanent location on the server, may not work on DC server
			$destination = "./Uploads/" . $file2_name;      
      
      //writing text file
      $foldername="./Uploads/";
      $TxtString2= $file2tag4 . "," . $file2tag5 . "," . $file2tag6;
      list($first, $last) = explode(".", $file1_name);
      $TextFileName=$first . ".txt";
      file_put_contents($foldername.$TextFileName, $TxtString2 );

		

			if (move_uploaded_file($file2_temp_location, $destination)) {
				echo "The file ". $file2_name . " has been uploaded and moved to " . $destination . ".";
			}
			else {
				echo "Sorry, there was an error uploading your file.";
			}

		}
}
		else
		{
			echo "<p>No file uploaded yet</p>";
		}
//Code for file 3  
$validExt = array("jpg", "png");
$validMime = array("image/jpeg","image/png");
$extension = end(explode(".", $fileArray["3file"]));
if (in_array($fileArray["type"],$validMime) && in_array($extension, $validExt)) {		
    if(isset($_FILES['3file']))
		{
			
     $file3tag7= $_POST['tag7'];
     $file3tag8=$_POST['tag8'];
     $file3tag9=$_POST['tag9'];

   //Accessing the file information
			$file3_name = $_FILES["3file"]["name"];
			$file3_temp_location = $_FILES['3file']['tmp_name'];
			//echoing the file information
			echo "File name: " . $file3_name . "<br>";
			echo "Temp location: " . $file3_temp_location . "<br>";
	//Moving the file to a permanent location on the server, may not work on DC server
			$destination = "./Uploads/" . $file3_name;      
      
      //writing text file
      $foldername="./Uploads/";
      $TxtString3= $file3tag7 . "," . $file3tag8 . "," . $file3tag9;
      list($first, $last) = explode(".", $file3_name);
      $TextFileName=$first . ".txt";
      file_put_contents($foldername.$TextFileName, $TxtString3 );

		

			if (move_uploaded_file($file3_temp_location, $destination)) {
				echo "The file ". $file3_name . " has been uploaded and moved to " . $destination . ".";
			}
			else {
				echo "Sorry, there was an error uploading your file.";
			}

		}
}
		else
		{
			echo "<p>No file uploaded yet</p>";
		}

	?>