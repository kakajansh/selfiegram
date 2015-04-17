<?php

require( "config.php" );
$action = isset( $_GET['action'] ) ? $_GET['action'] : "";
// ./?action=actionadi&parametre1=deger1

switch ( $action ) {
  case 'new':
    newPhoto();
    break;
  case 'profile':
    profile();
    break;
  case 'view':
    viewPhoto();
    break;
  case 'harita':
    harita();
    break;
  case 'favorites':
    favorites();
    break;
  case 'favoritesRemove':
    favoritesRemove();
    break;
  case 'favoritesAdd':
    favoritesAdd();
    break;
  case 'mine':
    mine();
    break;
  default:
    homepage();
}

function newPhoto() {
  require(TEMPLATE_PATH . "/upload.php");

  if (isset($_POST['saveChanges'])) {
    if($_FILES['image']['name']) {
      list($file,$error) = upload('image','images/','jpg,jpeg,gif,png');
      if(! $error) {
        $photo = new Photo;
        $photo->storeFormValues( $_POST );
        $photo->insert( $file );
        header( "Location: ./" );
      };
    }
  }
  require( TEMPLATE_PATH . "/new.php");

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

function profile() {
  $results['pageTitle'] = "Profilim";
  require( TEMPLATE_PATH . "/profile.php" );
}

function harita() {
  $results['pageTitle'] = "Haritada";
  require( TEMPLATE_PATH . "/harita.php" );
}

function mine() {
  $results = array();
  $action = isset( $_GET['action'] ) ? $_GET['action'] : "";

  $data = Photo::getByUser();
  $results['photos'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Benimkiler";

  require( TEMPLATE_PATH . "/mine.php");
}

//
// FAVORITES
//

function favorites() {
  $results = array();
  $action = isset( $_GET['action'] ) ? $_GET['action'] : "";

  $data = Favorite::getList();
  $results['photos'] = $data['results'];
  $results['totalRows'] = $data['totalRows'];
  $results['pageTitle'] = "Favorilerim";

  require( TEMPLATE_PATH . "/favorites.php");
}

function favoritesAdd() {

  $favorite = new Favorite;
  $favorite->insert( );

  header( "Location: ./?action=favorites" );

}

function favoritesRemove() {
  if ( !$favorite = Favorite::getById( (int)$_GET['favoriteId'] ) ) {
    header( "Location: ./?action=favorites" );
    return;
  }

  $favorite->delete();
  header( "Location: ./?action=favorites" );
}

?>
