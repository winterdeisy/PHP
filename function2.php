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
    <!-- function (name) (parameter) -->
    <h2>Basic</h2>

    <?php
    function basic() {
        print("lorem ipsum dolor<br>");
        print("lorem ipsum dolor<br>");

    }    
    basic();
    basic();
    basic();
    basic();
    basic();
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($left, $right) {
        print($left+$right);
        print("<br>");

    }
    sum(2,4);
    sum(4,6);
    ?>

    <h2>return</h2>
    <?php
    function sum2($left, $right) {
        return $left+$right;
    }
    print(sum2(2,4));
    file_put_contents('result.txt', sum2(2,4));
    // email('egoing@egoing.net', sum2(2,4));
    // upload('egoing.net', sum2(2,4));

    ?>
</body>
</html>