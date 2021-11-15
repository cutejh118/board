<?php include "./connect.php";

//각 변수에 write.php에서 input name값들을 저장한다
$username = $_POST['name'];
$userpw = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['content'];
$date = date('Y-m-d');
$hit = 1;
if($username && $userpw && $title && $content){
    $sql = dbQuery("insert into board(name,pw,title,content,date,hit) values('".$username."','".$userpw."','".$title."','".$content."','".$date."','".$hit."')"); 
    echo "<script>
    alert('글쓰기 완료되었습니다.');
    location.href='./table.php';</script>";
}else{
    echo "<script>
    alert('글쓰기에 실패했습니다.');
    history.back();</script>";
}
?>