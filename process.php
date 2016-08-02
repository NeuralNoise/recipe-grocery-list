<?php
    include'db.php';
    $name=$_POST['Name'];
    $num=$_POST['Number'];
    $n=new db();
    $n->connect();
    $n->insert($name,$num);
?>