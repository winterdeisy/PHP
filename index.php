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

    <?php
    // data 디렉토리에 있는 파일의 목록을 가져오고
    // 그 파일의 목록 하나하나를 li와 a 태그로 글목록 만들기
    
    $list = scandir('./data');
    $i=0;
    while($i < count($list)) {
        if($list[$i] != '.') {
            if($list[$i] != '..') {
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
    }
        $i = $i + 1;
    }
    ?>

    <?php
    if(isset($_GET['id'])) {
        echo $_GET['id'];
    } else {
        echo "welcome";
    }
    ?>

</body>
</html>