<?php include "connect.php";

$idx = $_GET['idx'];
$userpw = password_hash($_POST['reply_userpw'], PASSWORD_DEFAULT);

if ($idx && $_POST['reply_usernm'] && $userpw && $_POST['reply_content']) {
    //DB reply table에 삽입
    $sql = dbQuery("insert into reply(post_num, name, pw, content) values('" . $idx . "','" . $_POST['reply_usernm'] . "','" . $userpw . "''" . $idx . "','" . $_POST['reply_content'] . "')");
    echo "<script>alert('댓글 작성 완료');
    location.href='./read.php?idx=$idx';</script>";
} else {
    echo "<script>alert('댓글 작성 실패');
    history.back();</script>";
}
?>