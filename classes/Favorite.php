<?php

class Favorite
{
    public $userid = null;
    public $photoid = null;
    public $date = null;

    public function __construct( $data=array() ) {
        if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
        if ( isset( $data['date'] ) ) $this->date = (int) $data['date'];
        if ( isset( $data['userid'] ) ) $this->userid = (int) $data['userid'];
        if ( isset( $data['photoid'] ) ) $this->photo = (int) $data['photoid'];
    }

    public function storeFormValues ( $params ) {
        $this->__construct( $params );
        if ( isset($params['date']) ) {
            $date = explode ( '-', $params['date'] );

            if ( count($date) == 3 ) {
                list ( $y, $m, $d ) = $date;
                $this->date = mktime ( 0, 0, 0, $m, $d, $y );
            }
        }
    }

    public static function getList( $numRows=1000000, $order="publicationDate DESC" ) {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $sql = "SELECT photo.id, photo.title, photo.image FROM photos INNER JOIN favorites on
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
}