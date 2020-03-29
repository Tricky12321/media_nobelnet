<?php

/*
$volume = exec("mediactl receiver get volume");
var_dump($volume);
*/
$var1 = exec("mediactl receiver get volume");

$var = intval(exec("mediactl receiver get volume"));
var_dump($var);
var_dump($var1);