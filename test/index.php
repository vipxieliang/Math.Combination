<?php
require_once "/../src/MathCombination.class.php";
//Testing
$MathCombination    = new MathCombination();

//The need for a combination of two dimensional array definitions
$arr = array(
    array('A','B'),
    array('C','D'),
    array('E','F'),
    );

$result = array();    
//Structure returns array
foreach( $arr as &$val ) {
    $result = $MathCombination->arrayCombination($val,$result);
}
print_r($result);



$arr    = array('A','B','C','D','E');
//This is a combination
$res        = $MathCombination->Combination($arr,3);
print_r($res);
die;