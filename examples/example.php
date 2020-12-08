<?php

// add your own credentials in this file
require_once __DIR__ . '/credentials.php';

// required to load
require_once __DIR__ . '/../src/Skarabee.php';

// init api
$api = new Skarabee($username, $password);

// get publication
//$items = $api->get($publicationID);

// get all publications
$items = $api->getAll();

// get all projects
//$items = $api->getAllProjects();

// get contact info
//$item = $api->getContactInfo();

// insert
/*$item = array(
    'comments' => 'dit is een testje',
    'first_name' => 'Sebastien',
    'last_name' => 'Guzman',
    'phone' => '000000000'
);

print_r($api->addContactMessage($item));
*/

print_r($items);

// send feedback
$result = $api->pingBack(2247560, 'AVAILABLE', 'Dit is een test-feedback', '1', 'http://www.skarabee.com');

print_r($result);
