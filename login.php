<?php
if(isset($_COOKIE['login'])){
    header("location:memcenter.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
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
        .main {
            background-image: url(./img/img.jpeg);
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
        }

        /*登入區整體效果*/
        .content {
            width: 55vh;
            height: 60vh;
            backdrop-filter: brightness(50%);
            border-radius: 5px;
            margin: 15vh auto;
            color: whitesmoke;
        }

        /*標題的會員登入*/
        h1 {
            text-align: center;
            padding: 3% 0;
        }

        /*錯誤訊息*/
        .error {
            padding: 10% 2% 0;
            color: red;
        }


        /*帳號密碼輸入區整體*/
        .text {
            padding: 3%;
            margin-bottom: 8%;
            width: 100%;
        }

        /*輸入區*/
        #acc,
        #pw {
            width: 100%;
            font-size: 25px;
            padding: 0 2%;
        }

        /*文字標籤區*/
        #accLabel,
        #pwLabel {
            width: 100%;
            font-size: 25px;
        }

        /*帳號與密碼的間距*/
        p {
            padding: 1% 0;
        }

        /*密碼輸入區變色*/
        #pw:focus {
            background-color: lightblue;
        }

        /*調整按鈕與邊框的距離*/
        .buttons {
            margin: 0 5%;
        }

        /*控制按鈕*/
        .button {
            margin: 1% 0;
            width: 100%;
            height: 4vh;
            cursor: pointer;
            background-color: whitesmoke;
            color: grey;
            border: none;
            border-radius: 10px;
        }

        .button:active {
            background-color: skyblue;
            color: whitesmoke;
        }

        /*小畫面微調*/
        @media (max-width:576px) {
            .content {
                width: 350px;
                height: 450px;
            }

            .button {
                height: 30px;
            }

            #acc,
            #pw {
                font-size: 15px;
            }

            #accLabel,
            #pwLabel {
                font-size: 20px;
            }
        }

        @media(max-height:689px){
            .content {
                width: 350px;
                height: 450px;
            }

            .button {
                height: 30px;
            }

            #acc,
            #pw {
                font-size: 15px;
            }

            #accLabel,
            #pwLabel {
                font-size: 20px;
            }
        }
    </style>
</head>

<body class="main">



    <div class="content">

        <h1>會員登入</h1>

        <div class="error">
            <?php

            if (!empty($_GET['error'])) {
                echo "<h4>{$_GET['error']}</h4>";
            }

            ?>
        </div>

        <form action="cklogin.php" method="post">

            <div class="text">
                <p>
                    <label for="acc" id="accLabel"><i class="fa-solid fa-user"></i> User name</label>
                </p>
                <p>
                    <input type="text" name="acc" id="acc" placeholder="請輸入帳號">
                </p>

                <p>
                    <label for="pw" id="pwLabel"><i class="fa-solid fa-key"></i> Password</label>
                </p>
                <p>
                    <input type="password" name="pw" id="pw" placeholder="請輸入密碼">
                </p>
            </div>

            <div class="buttons">
                <input type="submit" value="登入" class="button">
                <input type="reset" value="重置" class="button">
            </div>
        </form>
    </div>

</body>

</html>