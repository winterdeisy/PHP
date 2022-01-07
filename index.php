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
    <ol>
        <?php
        $list = scandir('data');
        var_dump($list);
        ?>
    </ol>
    <?php
    // data 디렉토리에 있는 파일의 목록을 가져오고
    // 그 파일의 목록 하나하나를 li와 a 태그로 글목록 만들기
    <ol>
    $list = scandir('data');
    $i = 0;
    while($i<count($list)) {
        if($list[$i]!= '.') {
            if($list[$i] != '..') {
                ?>
                <li><a href="index.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
                <?php
            }
        }
        $i = $i + 1;
    }
    ?>
    </ol>
    ?>
    <h2>
        <?php
        if(isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "welcome";
        }
        ?>
    </h2>
    <?php 
    if(isset($_GET['id'])) {
        echo file_get_conGtents("data/".$_GET['id']);
    } else {
        echo "hello, php";
    }
    ?>
</body>
</html>