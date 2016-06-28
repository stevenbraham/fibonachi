<?php
/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 21-06-16
 * Time: 22:37
 */

namespace Brahambiz\Math;

/**
 * A class with functions to work with fibonacci number
 * @package Brahambiz\Math
 * @version 1.0
 * @author Steven Braham <stevenbraham@gmail.com>
 * @copyright (C) 2016, Steven Braham
 * @category Math utils
 * @license https://creativecommons.org/licenses/by-nc-nd/4.0/legalcode
 * @link https://en.wikipedia.org/wiki/Fibonacci_number
 */
final class fibonacci {
    /**
     * Internal cache for previously calculated numbers
     * @var array
     */
    private $memory = [0 => 0, 1 => 1];

    /**
     * Calculates the fibonacci number from a positive integer
     * @param int $number a positive integer
     * @return int|false the result of your calculation or false if you supplied an invalid argument
     * @since 1.0
     */
    public function calculate($number) {
        //normalisation
        $number = intval($number);
        return $number < 0 ? false : isset($this->memory[$number]) ? $this->memory[$number] : $this->memory[$number] = bcadd($this->calculate(bcadd($number, -1)), $this->calculate(bcadd($number, -2)));
    }
}

if(count($argv) > 1){
    $fibonacci = new fibonacci();
    $answer = $fibonacci->calculate($argv[1]);
    echo $answer  ? $answer : "something went wrong :(";
    echo PHP_EOL;
}else{
    die("example fibonacci.php 100" . PHP_EOL);
}
