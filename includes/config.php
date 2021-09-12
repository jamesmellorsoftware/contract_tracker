<?php
// Database connection constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'contracttracker');

// require_onces for all created classes
require_once('db.php');
require_once('session.php');
require_once('db_objects.php');
require_once('client.php');
require_once('user.php');

// Define input limits
defined("LIMIT_PASSWORD") ? null : define("LIMIT_PASSWORD", 25);
defined("LIMIT_USERNAME") ? null : define("LIMIT_USERNAME", 25);
defined("LIMIT_CLIENT_NAME") ? null : define("LIMIT_CLIENT_NAME", 25);

require_once("variables.php");

?>