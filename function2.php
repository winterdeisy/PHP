<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
    //약속된 기호 함수 : 재사용한다, 로직에 이름을 부여한다
    function basic() {
        print("lorem ipsum dolor");
        print("lorem ipsum dolor");
    }
    
    basic();
    basic();

    ?>
    <h2>parameter argument</h2>
    <?php
    // 함수에 입력값을 주면 내부적으로 다르게 동작
    function sum($left, $right) {
        print($left+$right);
        print("<br>");
    }
    sum(2,4);
    sum(4,6);
    ?>
    
</body>
</html>