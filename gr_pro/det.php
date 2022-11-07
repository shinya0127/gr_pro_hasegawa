<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view_sample.css">
</head>
<body>
    <header>
        <h1 class="header">タイトル</h1>
        <a href="#"><p class="header">画像読み取り</p></a>
        <a href="#"><p class="header">予定入力</p></a>
    </header>
    <div>
        <?php
            if(isset($_POST['pic'])){
                $pic = $_POST['pic'];
            echo $pic;
            }
        ?>
    </div>
    </body>
</html>