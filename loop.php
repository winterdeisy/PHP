<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>while</h1>
    <?php
    echo '1<br>';
    echo '2<br>';
    echo '3<br>';
    ?>
    <!-- 2를 여러번 반복하게 만드려면? -->
    <?php
    echo '1<br>';
    $i = 0;
    while($i < 3) {
    echo '2<br>';
    $i = $i + 1;
    }
    echo '3<br>';
    ?>

</body>
</html>