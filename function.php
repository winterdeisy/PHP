<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur, 
    
    
    adipisicing elit. Quibusdam, nihil pariatur. 
    
    
    Voluptatum necessitatibus asperiores harum, aspernatur molestiae dolorum dolor enim tempora illum provident obcaecati officia consequuntur ab totam neque aliquam.";
    echo $str;
    echo strlen($str); //계산결과를 반환해주는 작은 프로그램
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str);
    ?>
</body>
</html>