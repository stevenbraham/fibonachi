<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 06-11-16
 * Time: 01:21
 */

require_once "vendor/autoload.php";
require_once "lib/Fibonacci.php";
if (count($argv) > 1) {
    $fibonacci = new \Brahambiz\Math\Fibonacci();
    $answer = $fibonacci->calculate($argv[1]);
    echo $answer !== false ? $answer : "something went wrong :(";
    echo PHP_EOL;
} else {
    die("example: run.php 100" . PHP_EOL);
}