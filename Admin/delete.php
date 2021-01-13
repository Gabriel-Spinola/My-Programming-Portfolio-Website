<?php

if(isset($_POST['member_id'])){
    // connect to database
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_project','root','');
    
    // delete member (data came from ajax)
    $sql = $pdo -> prepare(
        "DELETE FROM `tb_team`
        WHERE id = ?;"
    );

    $sql -> execute([$_POST['member_id']]);
}