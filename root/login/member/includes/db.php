<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PWD", "root");
define("DB_NAME", "power_house");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PWD, DB_NAME);

// if ($connection) {
//     echo "we are connected";
// } else {
//     echo "not connected";
// }
