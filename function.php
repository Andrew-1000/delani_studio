<?php
session_start();
if(isset($_POST['submit'])){
  $names = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
}