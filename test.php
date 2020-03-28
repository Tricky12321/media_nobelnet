<?php


$volume = exec("mediactl receiver get volume");
var_dump($volume);