<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'lib/Pusher.php';
//Make sure you grab your own Pusher app credentials!
$key = 'a21dff3bcfcb8046acd0';
$secret = '1a3fcf7318796a5f8e05';
$app_id = '98285';
$pusher = new Pusher($key, $secret, $app_id);

if(isset($_POST['name']) && isset($_POST['message'])){
	$data = array(
		'name' => htmlentities(strip_tags($_POST['name'])),
		'message' => htmlentities(strip_tags($_POST['message'])),
	);

	$pusher->trigger('exercise-3-2', 'send-message', $data);
}