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
 * @version 1.1
 * @author Steven Braham <stevenbraham@gmail.com>
 * @copyright (C) 2016, Steven Braham
 * @category Math utils
 * @license https://creativecommons.org/licenses/by-nc-nd/4.0/legalcode
 * @link https://en.wikipedia.org/wiki/Fibonacci_number
 */
final class Fibonacci {
    /**
     * Internal cache for previously calculated numbers
     * @var array
     */
    private $memory = [0 => 0, 1 => 1];

    /**
     * Calculates the fibonacci number from a positive integer
     * This returns a string because of the large numbers that can be outputted from this that don't fit into an int
     * @param int $number a positive integer
     * @return string|false the result of your calculation or false if you supplied an invalid argument
     * @since 1.0
     */
    public function calculate($number) {
        //normalisation
        $number = intval($number);
        if ($number < 0) {
            //Fibonacci only works for positive integers
            return false;
        }
        return isset($this->memory[$number]) ? $this->memory[$number] : $this->memory[$number] = bcadd($this->calculate(bcadd($number, -1)), $this->calculate(bcadd($number, -2)));
    }
}
