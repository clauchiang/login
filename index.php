<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: '微軟正黑體';
        }

        /*背景*/
        .main {
            background-image: url(./img/img.jpeg);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>

<body class="main">

    <nav class="menu">
        <div>
            <a href="./index.php">回首頁</a>
        </div>
        <div>
            <a href="#">商品目錄</a>
        </div>
        <?php
        if (empty($_COOKIE['login'])) {
        ?>
            <div>
                <a href="./login.php">登入</a>
            </div>
        <?php
        } else {
        ?>
            }
            <div>
                <a href="./memcenter.php">會員中心</a>
            </div>
        <?php
        }
        ?>
    </nav>

</body>

</html>