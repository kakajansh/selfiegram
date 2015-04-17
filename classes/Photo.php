<?php

class Photo
{
  public $id = null;
  public $fav = null;
  public $lat = null;
  public $lng = null;
  public $publicationDate = null;
  public $title = null;
  public $image = null;
  public $content = null;

  public function __construct( $data=array() ) {
    if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
    if ( isset( $data['fav'] ) ) $this->fav = (int) $data['fav'];
    if ( isset( $data['lat'] ) ) $this->lat = (string) $data['lat'];
    if ( isset( $data['lng'] ) ) $this->lng = (string) $data['lng'];
    if ( isset( $data['publicationDate'] ) ) $this->publicationDate = (int) $data['publicationDate'];
    if ( isset( $data['title'] ) ) $this->title = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['title'] );
    if ( isset( $data['image'] ) ) $this->image = $data['image'];
    if ( isset( $data['content'] ) ) $this->content = $data['content'];
  }

  public function storeFormValues ( $params ) {
    $this->__construct( $params );
    if ( isset($params['publicationDate']) ) {
      $publicationDate = explode ( '-', $params['publicationDate'] );

      if ( count($publicationDate) == 3 ) {
        list ( $y, $m, $d ) = $publicationDate;
        $this->publicationDate = mktime ( 0, 0, 0, $m, $d, $y );
      }
    }
  }

  public static function getById( $id ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM photos WHERE id = :id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return new Photo( $row );
  }

  public static function getByUser( $userid=1 ) {
      $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
      $sql = "SELECT SQL_CALC_FOUND_ROWS *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM photos WHERE userid = :userid";
      $st = $conn->prepare( $sql );
      $st->bindValue( ":userid", $userid, PDO::PARAM_INT );
      $st->execute();
      $list = array();

      while ( $row = $st->fetch() ) {
        $photo = new Photo( $row );
        $list[] = $photo;
      }

      $sql = "SELECT FOUND_ROWS() AS totalRows";
      $totalRows = $conn->query( $sql )->fetch();
      $conn = null;
      return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
  }

  public static function getList( $numRows=1000000, $order="publicationDate DESC" ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT SQL_CALC_FOUND_ROWS *, UNIX_TIMESTAMP(publicationDate) AS publicationDate FROM photos
            ORDER BY " . $order . " LIMIT :numRows";

    $st = $conn->prepare( $sql );
    $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
    $st->execute();
    $list = array();

    while ( $row = $st->fetch() ) {
      $photo = new Photo( $row );
      $list[] = $photo;
    }

    $sql = "SELECT FOUND_ROWS() AS totalRows";
    $totalRows = $conn->query( $sql )->fetch();
    $conn = null;
    return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
  }

  public function insert( $image ) {
    if ( !is_null( $this->id ) ) trigger_error ( "Hatali.", E_USER_ERROR );
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "INSERT INTO photos ( publicationDate, userid, title, image, lat, lng, content ) VALUES ( FROM_UNIXTIME(:publicationDate), 1, :title, :image, :lat, :lng, :content )";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":publicationDate", $this->publicationDate, PDO::PARAM_INT );
    $st->bindValue( ":title", $this->title, PDO::PARAM_STR );
    $st->bindValue( ":image", "images/$image", PDO::PARAM_STR );
    $st->bindValue( ":lat", $this->lat, PDO::PARAM_STR );
    $st->bindValue( ":lng", $this->lng, PDO::PARAM_STR );
    $st->bindValue( ":content", $this->content, PDO::PARAM_STR );
    echo print_r($this);
    echo $image;
    $st->execute();
    $this->id = $conn->lastInsertId();
    $conn = null;
  }

  // EKLEME
  // GUNCELLEME
  // SILME
}

?>
