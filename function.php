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

    //MailChimp API URL providing

    $membID = md5(strtolower($email));
    $dataCentr = substr($apiKey, strpos($apiKey, '-')+1);
    $url = 'https://' . $dataCentr . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $membID;

    //Member Information
    $json = json_encode([
      'email_address' => $email,
      'status'        => 'subscribed',
      'names'         => $names
    ]);

    //Sending a HTTP Request to POST with curl
    //Curl(client side) transfers data using IPs(Internet Protocol) for the given url
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_USERPWD, 'user:' .$apiKey);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
    $result = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
        


  }
}