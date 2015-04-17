<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Turkey" );
define( "DB_DSN", "mysql:host=localhost:8889;dbname=hello" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "root" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
require( CLASS_PATH . "/Photo.php" );
require( CLASS_PATH . "/Favorite.php" );

function handleException( $exception ) {
  echo "Baglanti hatasi olustu, gardasm!!!";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
