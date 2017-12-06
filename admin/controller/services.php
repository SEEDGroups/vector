<?php
session_start();
require "../inc/config.php";
include ADMIN_SITEMAP."inc/function.php";
include ADMIN_SITEMAP."class/database.php";
include ADMIN_SITEMAP."class/services.php";
$services = new Services();
if(isset($_POST) && !empty($_POST)){
    $data = array();
    $id = sanitize($_POST[id]);
    $type = substr(Sha1("view-".$id), 9, 9);
    $data['summary'] = html_entity_decode(addslashes($_POST['summary']));
    $data['description'] = html_entity_decode(addslashes($_POST['description']));
    $update = $services->updateData($data, $id);
    if($update){
      $_SESSION['success'] = "Data has been updated succcessfully.";
    }else{
      $_SESSION['error'] = "Can't update data at the moment";
    }
    @header('location: ../services?id='.$id.'&type='.$type);
    exit;
  }else{
    $_SESSION['error'] = "Invalid Entry!";
    @header('location: ../services?id='.$id.'&type='.$type);
    exit;
  }
?>
