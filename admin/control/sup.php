<?php
$racine_path = '../';
$titre="Suprimer";
include($racine_path."view/header.php");
//appel de la fct pour sup
$type = $_GET["type"]; // oeuvre ou auteur 
$id = $_GET["id"]; // l'id à supprimer 
// Message selon le type 
echo '<main>';
if ($type === "oeuvre") { 
	$message = "L'oeuvre avec l'id $id va etre supprimer"; 
	$revenir = "oeuvreControl.php"; } 
elseif ($type === "artiste") { 
	$message = "L'auteur avec l'id $id va etre supprimer"; 
	$revenir = "artisteControl.php"; }
elseif($type === "user"){
	$message= "L'utilisateur avec l'id $id va etre supprimer";
	$revenir = "userControl.php";
}
include($racine_path."view/supV.php");
echo '</main>';
include($racine_path."view/footer.php");
?>
