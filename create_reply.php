<?php include "connect.php";
$sql = dbQuery("CREATE TABLE reply (idx INT NOT NULL AUTO_INCREMENT, post_num INT NOT NULL, name VARCHAR(100) NOT NULL, pw VARCHAR(100) NOT NULL, content TEXT NOT NULL, date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP, PRIMARY KEY(idx))");

if($sql){
    echo "성공적으로 댓글 테이블 생성완료";
}else{
    echo "reply 테이블 생성 실패";
}

?>