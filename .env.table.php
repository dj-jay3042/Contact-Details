<?php

$define = array (
    "TBL_CONTACT" => "tblContact",
);

foreach ($define as $key => $value) {
    if (!defined($key))
		define($key, $value);
}