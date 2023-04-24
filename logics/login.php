<?php
include("./connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    // Used for admin login
    if(isset($_POST["admin-login"])){
        if($_POST['id']!=NULL && $_POST['name']!=NULL && $_POST['option']!=NULL){
            adminlogin($_POST['id'],$_POST['name'],$_POST['option']);
        }
        header("location: ../admin.php");
    }
    // Used for user login
    if(isset($_POST["user-login"])){
        if($_POST['id']!=NULL && $_POST['name']!=NULL){
            userlogin($_POST['id'],$_POST['name'],$_POST['option']);
        }
        header("location: ../admin.php");
    }
    // Used to logout
    if(isset($_POST['logout-btn'])){
        if($_POST['logout-btn']!=NULL){
            logout($_POST['logout-btn']);
        }
        header("location: ../admin.php");
    }
}