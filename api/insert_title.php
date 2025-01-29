<?php
include_once "db.php";


if(!isset($_FILES['img']['tmp_name'])){

    move_uploaded_file($_FILES['img']['tmp_name'],"../upload/".$_FILES['img']['tmp_name']);
    $_POST['img']=$_FILES['img']['tmp_name'];

}

$Title->save($_POST);



// 在db.php增加function to($url)後才能在這寫to("")
to("../admin.php?do=title");
?>