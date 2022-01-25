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
    array('egoing','leezche','duru','taeho'); //배열의 표현식
    $coworkers = array('egoing','leezche','duru','taeho'); //배열을 담는 coworkers

    echo $coworkers[1]; //leezche
    echo $coworkers[2]; //duru

    //배열 안에 몇 개의 값이 들어있는가?
    echo count($coworkers); //4

    //배열에 값을 추가하고 싶다면?
    array_push($coworkers, 'graphittie');

    
    ?>
</body>
</html>