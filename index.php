<?php
//header('Access-Control-Allow-Origin: *');
//print 'Hello from PHP server';

header('Access-Control-Allow-Origin: *');


header('Content-Type: application/json');

$data = array (
/*     'message' => 'Hello from PHP server',
    'origin' => $_SERVER['HTTP_ORIGIN'] */
    array ('firstname' => 'John', 'lastname' => 'Doe', 'email' => 'johndoe@oamk.fi'),
    array ('firstname' => 'Jane', 'lastname' => 'Doe', 'email' => 'janedoe@oamk.fi'),
    array ('firstname' => 'Minna', 'lastname' => 'Smith', 'email' => 'minnasmith@oamk.fi'),
    array ('firstname' => 'Ele', 'lastname' => 'Smith', 'email' => 'elesmith@oamk.fi'),
    array ('firstname' => 'Teppo', 'lastname' => 'Kieva', 'email' => 'teppokieva@oamk.fi')
);
$json = json_encode($data,JSON_PRETTY_PRINT);
print $json;