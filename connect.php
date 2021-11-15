<?php
    header('Content-Type: text/html; charset=utf-8');
    $host = 'localhost';
    $name = 'root';
    $pw = null;
    $dbname = 'board_db';

    $db = new mysqli($host, $name, $pw, $dbname);
    $db->set_charset("utf8");

    if($db) {
        echo "MySQL 접속 성공";
    } else {
        echo "접속 실패";
    }

    function dbQuery($sql){
        global $db;
        return $db->query($sql);
    }
?>