<?php
echo (is_dir("Files/")) ? 'True' : 'False';
echo "<br>";
echo (is_file("Files/Checkme.txt")) ? 'True' : 'False';
echo "<br>";
echo (is_link("Files/Checkme.txt")) ? 'True' : 'False';
echo "<br>";
echo (is_readable("Files/Checkme.txt")) ? 'True' : 'False';
echo "<br>";
echo (is_writable("Files/Checkme.txt")) ? 'True' : 'False';
echo "<br>";
echo (is_uploaded_file("Files/Checkme.txt")) ? 'True' : 'False';
echo "<br>";
