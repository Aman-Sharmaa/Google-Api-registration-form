<?php

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '825289676583-0b77nknkjgjf6nfg3l6cr6r1p1e74ocn.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'Uf00rtVaYj3ge1n6Umfq-A1M'; //Google client secret
$redirectURL = 'http://localhost/Loginup/googleindex.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>