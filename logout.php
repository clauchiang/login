<?php

if(isset($_COOKIE)){
    setcookie('login','',time()-1);
    header("location:index.php");
}else{
    header("location:index.php");
}

?>