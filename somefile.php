<?php

require_once ('E:\WEB\Server\OpenServer\domains\test.local\newFolder\Auto.php');

$BMWX5 = new auto;

$BMWX5->brand = "BMW";
$BMWX5->model = "X5";

var_dump($BMWX5);

$GTR = new auto;

$GTR->brand = "Nissan";
$GTR->model = "GTR";

var_dump($GTR);