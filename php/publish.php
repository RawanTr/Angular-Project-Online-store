<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json; charset=UTF-8");

include_once("database.php");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
if(isset($postdata) && !empty($postdata))
{


$ID_utilisateur = trim($request->ID_utilisateur);
$Prix= trim($request->Prix);
$Type = trim($request->Type);
$Marque = trim($request->Marque);
$Titre=trim($request->Titre);
$Description=trim($request->Description);
$Taille=trim($request->Taille);
$Genre=trim($request->Genre);


$sql = "INSERT INTO article(ID_utilisateur,Prix,Type,Marque,Titre,Description,Taille,Genre) VALUES ('$ID_utilisateur','$Prix','$Type','$Marque','$Titre','$Description','$Taille','$Genre')";
if ($mysqli->query($sql)) {

    $data=array('message'=>'success');
    echo json_encode($data); 
}else{
    $data=array('message'=>'failed');
    echo json_encode($data); 
    }
}

?>