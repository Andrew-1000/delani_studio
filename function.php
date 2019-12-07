<?php
session_start();
if(isset($_POST['submit'])){
  $names = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    //Providing API Credentials
    $apiKey = 'e608817098f3dc675bd2cac03ae0f410-us4';
    $listID = 'd737bb660e';

    //M
  }
}