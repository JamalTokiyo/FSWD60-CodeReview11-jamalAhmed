<?php

error_reporting( ~E_DEPRECATED & ~E_NOTICE );


define('DBHOST', 'localhost');
define('DBUSER', 'root');
define('DBPASS', '');
define('DBNAME', 'cr11_jamal_travelmatric');

$connect = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);


if ( !$connect ) {
 die("Connection failed : " . mysqli_error());
}


?>