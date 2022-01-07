<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array</h1>
    <?php
    $coworkers = array('egoing', 'leezche', 'duru'); //배열을 담고있는 변수
    echo $coworkers[1]; //leezche 
    echo $coworkers[2]; //duru
    var_dump(count($coworkers)); //3
    array_push($coworkers, 'graphittie'); //배열에 데이터를 넣는다
    var_dump(count($coworkers)); //4
    ?>
</body>
</html>