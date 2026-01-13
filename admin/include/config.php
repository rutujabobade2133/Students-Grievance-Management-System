<?php
$mysql_hostname = "localhost";     // your local server
$mysql_user = "root";              // default XAMPP MySQL user
$mysql_password = "";              // default XAMPP password is empty
$mysql_database = "students_grievance_system"; // the database you created locally
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database) or die("Could not connect database");


?>