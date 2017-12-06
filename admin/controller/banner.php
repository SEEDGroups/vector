<?php
session_start();
require "../inc/config.php";
include ADMIN_SITEMAP."inc/function.php";
include ADMIN_SITEMAP."class/database.php";
include ADMIN_SITEMAP."class/banner.php";
$banner = new Banner();
if(isset($_POST) && !empty($_POST)){
    if(empty($_FILES)){
      $data = array();
      $id = sanitize($_POST['id']);
      $data['btitle'] = addslashes($_POST['btitle']);
      $data['bsummary'] = htmlentities(addslashes($_POST['bsummary']));
      $update = $banner->updateBanner($data, $id);
      if($update){
        $_SESSION['success'] = "Data has been updated succcessfully.";
      }else{
        $_SESSION['error'] = "Can't update data at the moment";
      }
      @header('location: ../banner');
      exit;
    }
  }
    else{
    $_SESSION['error'] = "Invalid Entry!";
    @header('location: ../banner');
    exit;
  }
?>
