<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>

    <!-- 자동화하기
    <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        <li><a href="index.php?id=PHP">PHP</a></li>
    </ol> -->

    <?php
    // data 디렉토리에 있는 파일의 목록을 가져와서 그 파일의 목록 하나하나를 li와 a태그로 만들기
    
    ?>

    <h2>
        <?php
        if(isset($_GET['id'])) {
        //만약에 id값이 있다면
        echo $_GET['id'];
        } else {
        //만약에 id값이 없다면
        echo "welcome";
        }
        ?>
    </h2>
    <?php
    if(isset($_GET['id'])) {
    echo file_get_contents("data/".$_GET['id']);
    } else {
        echo "hello, php";
    }
    ?>
</body>
</html>