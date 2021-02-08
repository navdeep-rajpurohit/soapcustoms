<?php
   define('DB_SERVER', 'localhost');
   // define('DB_USERNAME', 'id11288912_navdeep');
   // define('DB_PASSWORD', 'Navdeep1');
   // define('DB_DATABASE', 'id11288912_navdeep');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'Navdeep');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

?>