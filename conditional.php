<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conditional</h1>
    <h2>if</h2>
    <?php
    //시간의 순서에 따라 동작한다.
    echo '1<br>';
    echo '1<br>';
    echo '1<br>';
    ?>
    <h2>conditional</h2>
    <?php
    //조건문을 사용 -> 실행 순서를 바꿀수있다.
    echo '1<br>';
    if(1==2) {
        echo '1<br>';
    } else {
    echo '2<br>';
    }
    echo '3<br>';
    ?>
</body>
</html>