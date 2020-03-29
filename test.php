<?php

/*
$volume = exec("mediactl receiver get volume");
var_dump($volume);
*/
$var1 = exec("mediactl receiver get volume");

$var = intval(((string) exec("mediactl receiver get volume"))[0]);
var_dump($var);
var_dump($var1);