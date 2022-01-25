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
        <?php
        /*
        //scandir은 특정한 디렉토리에 소속된 파일을 배열로 반환한다.
        $list = scandir('./data');
        var_dump($list);
        */

        //원소를 하나씩 꺼내오기
        /*
        echo "<li>$list[0]</li>\n"; //.
        echo "<li>$list[1]</li>\n"; //..
        echo "<li>$list[2]</li>\n";
        echo "<li>$list[3]</li>\n";
        echo "<li>$list[4]</li>\n";
        echo "<li>$list[5]</li>\n";
        */

        //반복문 사용하기
        /*
        $i = 0;
        while($i < 6) {
            echo "<li>$list[$i]</li>\n";
            $i = $i + 1;
        }
        */

        //항목이 자동으로 추가되도록 반복문 사용하기
        $list = scandir('./data');
        $i = 0;
        while($i < count($list)) {
            if($list[$i] != '.') {
                //리스트의 .을 제거
                if($list[$i] != '..') {
                    //리스트의 ..을 제거
            echo "<li><a
            href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
                }
            }
            $i = $i + 1;
        }



        ?>
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