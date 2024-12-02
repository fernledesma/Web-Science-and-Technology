<?php
		if(isset($_FILES['1file']))
		{
			//Accessing the file information
			$file1_name = $_FILES["1file"]["name"];
			$file1_temp_location = $_FILES['1file']['tmp_name'];
      $file1tag1= $_POST['tag1'];
      $file1tag2=$_POST['tag2'];
      $file1tag3=$_POST['tag3'];
      
      //Obtaining new file name
      list($first, $last) = explode(".", $file1_name);
      $TextFileName=$first . ".txt";
      file_put_contents($TextFileName, file_get_contents($file1tag1 . $file1tag2 . $file1tag3));
        
			//echoing the file information
			echo "File name: " . $file1_name . "<br>";
			echo "Temp location: " . $file1_temp_location . "<br>";

			//Moving the file to a permanent location on the server, may not work on DC server
			$destination = "./Uploads/" . $file1_name;

			if (move_uploaded_file($file1_temp_location, $destination)) {
				echo "The file ". $file1_name . " has been uploaded and moved to " . $destination . ".";
			}
			else {
				echo "Sorry, there was an error uploading your file.";
			}

		}
		else
		{
			echo "<p>No file uploaded yet</p>";
		}
/*
 $validMime = array("image/jpeg","image/png");
    foreach($_FILES as $fileKey => $fileArray ){
       $extension = end(explode(".", $fileArray["name"]));
        if (in_array($fileArray["type"],$validMime) && in_array($extension, $validExt)) {
          echo "All is well. Extension and mime types valid";
        }
        else {
          echo $fileKey." has an invalid mime type or extension";
         }
    }
*/
	?>