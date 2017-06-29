<?php
// Changes directory
// chdir("Files");

// Changes root directory (NOT AVAILABLE ON WINDOWS)
// chroot("Files");

// Reads the files in a directory
$dir = opendir("Files/");
while (($file = readdir($dir)) !== false)
 	{
      echo "filename:" . $file . "<br>";
    }

// Deletes a directory
if (is_dir("tmp"))
	{
	  rmdir("tmp");
    }
    
// Return trailing name component
echo basename("Files/CSVFile") . "<br>";

// Changes permissions of a file
chmod("Files/CSVFile.csv", 0644);

// copies file
copy("Files/CSVFile.csv", "Files/CSVFile2.csv");

// Checks if file exists
echo file_exists("Files/CSVFile.csv") . "<br>";

// Writes to file
$writefile = fopen('Files/Fput.txt', "w+");
fputs($writefile, "Hello");

// Renames File
// rename("Files/Rename.txt", "Files/Rename2.txt");

// Deletes File
// unlink("Files/DeleteMe.txt");