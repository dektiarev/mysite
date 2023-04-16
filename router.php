<?php
session_start();

if(!$_SESSION['loged'])
{
    require_once "views/vlogin_form.php";
}

if($_GET)
{

}

if($_POST)
{
    $_SESSION['loged'] = "OK";
    $teacher = new \app\classes\CLogin();
}