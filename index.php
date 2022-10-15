<?php

use Sujit\AlgoPractice\Helpers\MultiplyRepeatedCharactersHelper;
use Sujit\AlgoPractice\Helpers\SumRepeatedCharactersHelper;

require_once 'vendor/autoload.php';

$s = "666441834933366";
var_dump(MultiplyRepeatedCharactersHelper::process($s));
var_dump(SumRepeatedCharactersHelper::process($s));