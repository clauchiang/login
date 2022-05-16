<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="./img/icon.png" type="image/x-icon">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: '微軟正黑體';
        }

        /*背景*/
        body {
            background-image: url(./img/img.jpeg);
            background-size: cover;
            background-attachment: fixed;
        }

        /*標題*/
        h1 {
            color: whitesmoke;
            text-align: center;
            margin: 1% 0;
        }

        /*歡迎區*/
        header {
            color: whitesmoke;
            margin: 5% auto;
            font-size: 50px;
            width: max-content;
            padding: 5%;
            border-radius: 10px;
            backdrop-filter: brightness(50%);
        }

        /*按鈕位置調整*/
        div {
            display: flex;
            justify-content: center;
            margin-top: 20vh;
        }

        a{
            padding: 0 10px;
        }

        input {
            width: 15vh;
            height: 5vh;
            border: none;
            background-color: whitesmoke;
            color: gray;
            cursor: pointer;
            border-radius: 10px;
        }

        input:active {
            color: whitesmoke;
            background-color: skyblue;
        }
    </style>
</head>

<body>

    <h1>會員中心</h1>

    <header>
        <marquee behavior="" direction="">
            歡迎 <?= $_COOKIE['login']; ?> ~~~<i class="fa-solid fa-music"></i></i>
        </marquee>
    </header>

    <div>
        <a href="./index.php"><input type="button" value="回首頁"></a>
        <a href="./logout.php"><input type="button" value="登出"></a>   
    </div>

</body>

</html>