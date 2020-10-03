<?php
require_once "models/MySqlConnection.php";

define ('BASE_DIR', "http://127.0.0.1/tpi/objects/");
define ('CONTROLLERS_DIR', "controllers/");
define ('DEFAULT_CONTROLLER', "Home");
define ('DEFAULT_ACTION', "showHome");
define ('DB_USER', "root");
define ('DB_HOST', "127.0.0.1");
define ('DB_PASSWORD', "");
define ('DB_NAME', "test");

$txt = "hey";
$database = new MySqlConnection(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$database->connect();