<?php
/*	
$client_id = 'd2c478e8fd3c7d0';
$client_secret = 'ec0651656bb499124e4475be1539fde4015a894b';
//First check if refresh is needed
$refresh_token='0d043f8b4e823189153fc68139d6f7c7050e1ad6';
$refreshURL = "https://api.imgur.com/oauth2/token";
$refreshData = array(
		"refresh_token"=>$refresh_token,
		"client_id"=>$client_id,
		"client_secret"=>$client_secret,
		"grant_type"=>"refresh_token"
	);

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $refreshURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_POST, count($refreshData));
curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($refreshData));
$response = curl_exec($ch);
//echo $response;
//die();
$token = json_decode($response)->access_token;
//curl_close($ch);
//echo $token;
//die();



//$token='621ba4d321625c633c4d435abc4cb5e3c5fd10a9';
$ch = curl_init("https://api.imgur.com/3/account/deweydarl/images/0");
//curl_setopt($ch, CURLOPT_HTTPHEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $token
    ));
$json = curl_exec($ch);
//echo $json;
//die();
curl_close($ch);
$json = json_decode($json);

foreach ($json->data as $d){
	echo "<img src='$d->link'/>";
}
*/

$client_id = '550f5b062875063';
$client_secret = '5b09d9b4d3bcb9e50c41aa174fadd1bb2091488e';
//First check if refresh is needed
$refresh_token='3647e35c622a46e24b3e403c7d5d625c569908e1';
$refreshURL = "https://api.imgur.com/oauth2/token";
$refreshData = array(
		"refresh_token"=>$refresh_token,
		"client_id"=>$client_id,
		"client_secret"=>$client_secret,
		"grant_type"=>"refresh_token"
	);

$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $refreshURL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_POST, count($refreshData));
curl_setopt($ch,CURLOPT_POSTFIELDS, http_build_query($refreshData));
$response = curl_exec($ch);
//echo $response;
//die();
$token = json_decode($response)->access_token;
//curl_close($ch);
//echo $token;
//die();



//$token='621ba4d321625c633c4d435abc4cb5e3c5fd10a9';
$ch = curl_init("https://api.imgur.com/3/account/PawFriendlyFurniture/images/0");
//curl_setopt($ch, CURLOPT_HTTPHEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $token
    ));
$json = curl_exec($ch);
//echo $json;
//die();
curl_close($ch);
$json = json_decode($json);
$images = array();
foreach ($json->data as $d){
	array_push($images, $d->link);
}
?>













