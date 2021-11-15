<?php include "connect.php";
$idx = $_GET['idx'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" Type="text/css" href="./write.css">
    <title>게시판</title>
</head>
<body>
    <div class="board_write">
        <h1><a href="./table.php">자유게시판</a></h1>
        <h4>글을 수정하세요</h4>
        <div>
            <form action="./modify_db.php?idx=<?php echo $idx ?>" method="post">
            <div id="title">
                <textarea name="title" placeholder="제목" id="" cols="55" rows="1"></textarea>
            </div>
            <div id="name">
                <textarea name="name" placeholder="글쓴이" id="" cols="55" rows="1"></textarea>
            </div>
            <div id="content">
                <textarea name="content" placeholder="내용" id=""></textarea>
            </div>
            <div id="pw">
                <input type="password" name="pw" placeholder="비밀번호"/>
            </div>
            <div id="button">
                <button type="submit">글 작성</button>
            </div>
        </form>
        </div>



    </div>
    
</body>
</html>