<?php 

    session_start();

    include_once('config.php');

    $query2 = $pdo->prepare("SELECT * FROM ProjetWeb.annonce WHERE id_annonceur = '{$_SESSION["id"]}' AND id = '{$_GET["id"]}'");
    $query2->execute();
    $infos2 = $query2->fetch();


    if (!empty($_POST["new_description"])) {
        $query = $pdo->prepare("UPDATE ProjetWeb.annonce
        SET description = '{$_POST["new_description"]}'
        WHERE id = '{$_GET["id"]}'");

        $query->execute();

        header("Location: mon_profil.php");
        exit;
    }


?>