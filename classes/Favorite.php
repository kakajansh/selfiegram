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
        // if ( isset($params['date']) ) {
        //     $date = explode ( '-', $params['date'] );

        //     if ( count($date) == 3 ) {
        //         list ( $y, $m, $d ) = $date;
        //         $this->date = mktime ( 0, 0, 0, $m, $d, $y );
        //     }
        // }
    }

    public static function getById( $id ) {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $sql = "SELECT * FROM favorites WHERE id = :id";
        $st = $conn->prepare( $sql );
        $st->bindValue( ":id", $id, PDO::PARAM_INT );
        $st->execute();
        $row = $st->fetch();
        $conn = null;
        if ( $row ) return new Favorite( $row );
    }

    public static function getList( ) {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $sql = "SELECT photos.id, photos.title, photos.image, photos.content, favorites.id AS fav FROM photos INNER JOIN favorites on
                favorites.photoid = photos.id WHERE favorites.userid = 1";

        $st = $conn->prepare( $sql );
        // $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
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

    public function insert( ) {
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $sql = "INSERT INTO favorites ( userid, photoid ) VALUES ( 1, :photoid )";
        $st = $conn->prepare ( $sql );
        $st->bindValue( ":photoid", $_GET['photoid'], PDO::PARAM_INT );
        $st->execute();
        $this->id = $conn->lastInsertId();
        $conn = null;
    }

    public function delete() {
        if ( is_null( $this->id ) ) trigger_error ( "Hatali", E_USER_ERROR );
        $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
        $st = $conn->prepare ( "DELETE FROM favorites WHERE id = :id LIMIT 1" );
        $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
        $st->execute();
        $conn = null;
    }
}