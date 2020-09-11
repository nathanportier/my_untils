<?php

if(isset($_POST['nom'])){
    require '../db_con.php';

    $nom = $_POST['nom'];

    if(empty($nom)){
        header("Location: ../_to_do_list.php?mess=error");
    }else {
        $stmt = $conn->prepare("INSERT INTO todo(nom) VALUE(?)");
        $res = $stmt->execute([$nom]);

        if($res){
            header("Location: ../_to_do_list.php?mess=success"); 
        }else {
            header("Location: ../_to_do_list.php");
        }
        $conn = null;
        exit();
    }
}else {
    header("Location: ../_to_do_list.php?mess=error");
}

?>