<?php
    
$validExt = array("jpg", "png");
$validMime = array("image/jpeg","image/png");
$extension = end(explode(".", $fileArray["1file"]));
 echo "hello1";
 echo $_FILES['file1'];
 
//if (in_array($fileArray["type"],$validMime) && in_array($extension, $validExt)) {
		if(isset($_FILES['1file']))
		{
      echo "hello2";
      
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

	?>