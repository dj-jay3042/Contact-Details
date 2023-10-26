<?php

$define = array (
    "DB_HOST" => "sql304.infinityfree.com",
    "DB_USER" => "if0_35164000",
    "DB_PASS" => "DJJay865930",
    "DB_NAME" => "contact_details",
    "DB_PORT" => "3306",
    "DB_PREFIX" => "if0_35164000_",
);

foreach ($define as $key => $value) {
    if (!defined($key))
		define($key, $value);
}