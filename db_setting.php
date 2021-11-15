<?php
    // 맨처음 셋팅
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

    $sql = "CREATE TABLE board(idx INT NOT NULL AUTO_INCREMENT,name VARCHAR(100) NOT NULL,pw VARCHAR(100) NOT NULL , title VARCHAR(100) NOT NULL , content TEXT NOT NULL , date DATE NOT NULL , hit INT NOT NULL , PRIMARY KEY (idx))";
    if($db->query($sql)){
        echo "성공적으로 board 테이블 생성";
    } else {
        echo "테이블 생성 오류";
    }
?>