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
    sum(2,4); //입력값에 따라 다르게 동작한다
    sum(4,6);
    ?>

    <h2>return</h2>
    <?php
    //sum()함수에는 출력하는 기능이 내장되어있지 않음
    //출력하는 함수도 함께 내장되어 있는 함수 sum2()
    function sum2($left, $right) {
        //return을 만나는 순간 함수는 종료된다.
        return $left+$right;
        //리턴 이후는 출력되지 않음
        echo 1234;
    }
    print(sum2(2,5));
    file_put_contents('result.txt', sum2(2,5));

    ?>
    
</body>
</html>