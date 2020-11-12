<?php
$pattern = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/';
$result= preg_match($pattern,"1Qwerty23@#456");
var_dump($result);
