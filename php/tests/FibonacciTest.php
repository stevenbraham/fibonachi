<?php

/**
 * Created by PhpStorm.
 * User: stevenbraham
 * Date: 06-11-16
 * Time: 01:23
 */

namespace Brahambiz\Math;


use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . "/../lib/Fibonacci.php";

/**
 * Test class for my fibonacci class
 * @author Steven Braham <stevenbraham@gmail.com>
 * @see \Brahambiz\Math\Fibonacci
 */
class FibonacciTest extends TestCase {

    /**
     * Internal Fibonacci object
     * @var Fibonacci
     */
    private $fibonacci;

    public function setUp() {
        $this->fibonacci = new Fibonacci();
    }

    /**
     * Checks if the calculate function returns false when a number is out of range
     */
    public function testNegativeNumberReturnsFalse() {
        $this->assertFalse($this->fibonacci->calculate(-1), "No negative numbers are allowed");
    }

    /**
     * If you input 0 in a Fibonacci function, the output should always be 0
     */
    public function testZeroIsZero() {
        $this->assertEquals($this->fibonacci->calculate(0), 0, "Zero should be zero");
    }

    /**
     * If you input 1 in a Fibonacci function, the output should always be 1
     */
    public function testOneIsOne() {
        $this->assertEquals($this->fibonacci->calculate(1), 1, "1 should be 1");
    }

    /**
     * Compares the known output from other calculators to my calculate function
     */
    public function testRandomNumbers() {
        $this->assertEquals($this->fibonacci->calculate(14), 377);
        $this->assertEquals($this->fibonacci->calculate(200), "280571172992510140037611932413038677189525");
        $this->assertEquals($this->fibonacci->calculate(23), 28657);
    }
}