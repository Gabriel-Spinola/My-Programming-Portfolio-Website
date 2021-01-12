<?php

if(isset($_POST['member_id'])){
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_project','root','');
    $sql = $pdo->prepare("DELETE FROM `tb_team` WHERE id = ?");
    $sql->execute(array($_POST['member_id']));
}