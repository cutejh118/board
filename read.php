<?php include "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./read.css" />

</head>

<body>
    <?php
    $idx = $_GET['idx'];
    $result = mysqli_fetch_array(dbQuery("select * from board where idx ='" . $idx . "'"));
    $hit = $result['hit'] + 1;
    $fet = dbQuery("update board set hit = '" . $hit . "' where idx='" . $idx . "'");
    $sql = dbQuery("select * from board where idx ='" . $idx . "'");
    $board = $sql->fetch_array();
    ?>


    <div id="board_read">
        <h2><?php echo $board['title'];  ?></h2>
        <div id="user_info"><?php echo $board['name'];  ?> <?php echo $board['date'];  ?> 조회수 :<?php echo $board['hit'];  ?>
            <div id="board_line"></div>
        </div>
        <div id="board_content">
            <?php echo $board['content'];  ?>
        </div>
        <div id="board_func">
            <ul>
                <li><a href="./table.php">목록으로</a></li>
                <li><a href="./modify.php?idx=<?php echo $board['idx']; ?>">수정</a></li>
                <li><a href="./delete.php?idx=<?php echo $board['idx']; ?>">삭제</a></li>
            </ul>
        </div>
    </div>
    <div class="reply_wrapper">
        <h3>댓글목록</h3>
        <?php 
        $sql3 = dbQuery("select * from reply where post_num='".$idx."' order by idx desc");
        while($reply = $sql3->fetch_array()){
        ?>
        <div class="reply_item">
            <div class="reply_name"><?php echo $reply['name']; ?></div>
            <div class="reply_content"><?php echo $reply['content']; ?></div>
            <div class="reply_date"><?php echo $reply['date']; ?></div>
            <div class="reply_func">
                <a class="delete_btn" href="delete_reply.php?idx=<?php echo $reply['idx']; ?>&bIdx=<?php echo $board['idx'] ?>" >삭제</a>
            </div>
        </div>
        <?php } ?>
        <!-- 댓글 입력 form -->
        <form action="reply_db.php?idx=<?php echo $idx; ?>" method="post">
            <div class="reply_form">
                <div id="user_info">
                    <input type="text" name="reply_usernm" id="reply_usernm" placeholder="아이디" required>
                    <input type="password" name="reply_userpw" id="reply_userpw" placeholder="비밀번호" required>
                </div>
                <textarea name="reply_content" placeholder="댓글을 입력하세요" required></textarea>
                <button>댓글</button>
            </div>
        </form>
    </div>
</body>
</html>