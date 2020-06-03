<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    header("Content-Type: application/json");

    $test_username = "test1234";

    $obj = (object)[];
    $obj->accessToken = "1234";
    $obj->clientToken = "5678";
    $s = (object)[];
    $s->agent = "minecraft";
    $s->id="";
    $s->name=$test_username;
    $obj->availableProfiles = [$s];
    $obj->selectedProfile = $s;
    echo json_encode($obj);
?>
