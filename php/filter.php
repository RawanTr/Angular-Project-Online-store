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
$filter = trim($request->filter);

$sql = "SELECT * FROM article WHERE article.Type='$filter'";
$result=mysqli_query($mysqli,$sql);
$nums=mysqli_num_rows($result);

if(($nums>0) && ($filter=='Tshirt')){
    $data=array('message'=>'successTshirts');
    echo json_encode($data);   
}
if($nums>0 && $filter=='Chaussure'){
    $data=array('message'=>'successChaussures');
    echo json_encode($data);   
}
if($nums>0 && $filter=='Robe'){
    $data=array('message'=>'successRobes');
    echo json_encode($data);   
}
if($nums>0 && $filter=='Pantalon'){
    $data=array('message'=>'successPantalons');
    echo json_encode($data);
}
if($nums>0 && $filter=='Accesoire'){
    $data=array('message'=>'successAccesoires');
    echo json_encode($data);    
}
if($nums>0 && $filter=='Sac'){
    $data=array('message'=>'successSacs');
    echo json_encode($data);    
}
if($nums>0 && $filter=='Veste'){
    $data=array('message'=>'successVestes');
    echo json_encode($data);    
}
if($nums>0 && $filter=='Short'){
    $data=array('message'=>'successShorts');
    echo json_encode($data);    
}


}

?>