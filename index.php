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
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <h2>
        <?php
        if(isset($_GET['id'])) {
        //만약에 id값이 있다면
        echo $_GET['id'];
        } else {
        //만약에 id값이 없다면
        echo "welcome";
        }
        ?>
    </h2>
    <?php
    if(isset($_GET['id'])) {
    echo file_get_contents("data/".$_GET['id']);
    } else {
        echo "hello, php";
    }
    ?>
</body>
</html>