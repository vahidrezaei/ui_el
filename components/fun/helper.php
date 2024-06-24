<?php
/**
 * @param $param
 * @return void
 */
function dd($param)
{
    $param = json_decode($param);
//    $param = (object)$param;
    echo "<pre style='direction: ltr'>";
    print_r($param);
    echo "</pre>";
    die();
}
function JsonToObject($param){
    return json_decode($param);
}