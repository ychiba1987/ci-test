<?php
require_once('./Sample.php');
abstract class SampleTest extends \PHPUnit\Framework\TestCase
{
    public function testハローワールド()
    {
        $Sample = new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }
    
    /**
     * @test
     */
    public function aaa()
    {
        $Sample= new Sample();
        $this->assertEquals($Sample->helloWorld(), 'hello world!');
    }
}