<?php
$badjson = '{ "name": "Bob", "Age": Hello }';
json_decode($badjson);
echo json_last_error_msg();