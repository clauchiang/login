<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    

</style>

<div>
<?php

$default_user='php';
$default_pw='123';




$acc=$_POST['acc'];
$pw=$_POST['pw'];

$error='';


if($acc!=$default_user || $pw!=$default_pw){

    $error="<i class='fa-solid fa-triangle-exclamation'></i> 帳號或密碼錯誤，請重新輸入";

    header("location:index.php?error=$error");

}
else{
    header("location:memcenter.php?user=$acc");
}

?> 
</div>

