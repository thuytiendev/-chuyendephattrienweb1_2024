<?php
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_POST['id'])) {
    $a = base64_decode(urldecode($_POST['id']));
    $id = round(((($a*956783)/5678)/123456789));
    $userModel->deleteUserById($id);//Delete existing user
}

header('location: list_users.php');
?>