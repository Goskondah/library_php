<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_NAME','library');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn===false){
    die("Error:Could not Connect ".mysqli_connect_error());
}
else{
	echo "connected";
}
?>