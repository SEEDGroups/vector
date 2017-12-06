<?php
session_start();
require "../inc/config.php";
include ADMIN_SITEMAP."inc/function.php";
include ADMIN_SITEMAP."class/database.php";
include ADMIN_SITEMAP."class/user.php";
$updatePassword = new User();
if(isset($_POST) && !empty($_POST)){
    $username = sanitize($_POST['username']);
    $data = array();
    $id = 1;
    $oldPassword = sha1($_POST['oldPassword']);
    $confirmUser = $updatePassword->getUserByUsername($username);
    if($confirmUser){
      if($oldPassword == $confirmUser[0]->password){
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];
        if($newPassword == $confirmPassword){
          $data['password'] = sha1($confirmPassword);
          $updateUserPassword = $updatePassword->updatePassword($data, $id);
          if($updateUserPassword){
            $_SESSION['success'] = "Password has been changed!";
          }else{
            $_SESSION['info'] = "Password can't be changed at this moment. Try again later.";
          }
          @header('location: ../changePassword');
          exit;
        }else{
          $_SESSION['info'] = "New and Confirm Password doesn't match!";
        }
        @header('location: ../changePassword');
        exit;
      }else{
        $_SESSION['info'] = "Old Password doesn't match!";
      }
      @header('location: ../changePassword');
      exit;
    }else{
      $_SESSION['error'] = "Username incorrect!";
    }
    @header('location: ../changePassword');
    exit;
  }else{
    $_SESSION['error'] = "Invalid Entry!";
    @header('location: ../changePassword');
    exit;
  }
?>
