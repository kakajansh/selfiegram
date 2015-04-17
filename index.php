<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
// ./?action=actionadi&parametre1=deger1

switch ( $action ) {
  case 'profile':
    profile();
    break;
  case 'view':
    viewPhoto();
    break;
  default:
    homepage();
}

function profile() {
  $results['pageTitle'] = "Profile | Selfiegram";
  require( TEMPLATE_PATH . "/profile.php" );
}

function viewPhoto() {
  if ( !isset($_GET["photoId"]) || !$_GET["photoId"] ) {
    homepage();
    return;
  }

  $results = array();
  $results['photo'] = Photo::getById( (int)$_GET["photoId"] );
  $results['pageTitle'] = $results['photo']->title . " | Selfiegram";
  require( TEMPLATE_PATH . "/view.php" );
}

function homepage() {
  $results = array();
  $action = isset( $_GET['action'] ) ? $_GET['action'] : "";
  $order = isset( $_GET['order'] ) ? $_GET['order'] : "";

  if ($order == "" || $order == "last") {
    $data = Photo::getList(100, "id ASC" );
  } else if ($order == "top") {
    $data = Photo::getList(100, "id DESC");
  }
  $results['photos'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Selfiegram";

  if ($action == "" || $action == "gridview") {
    require( TEMPLATE_PATH . "/homepage.php");
  } else if ($action == "listview") {
    require( TEMPLATE_PATH . "/listview.php");
  }
}

?>
