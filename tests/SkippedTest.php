<?php
class SkippedTest extends \PHPUnit_Framework_TestCase
{
    public function testSkipped()
    {
	    $this->assertTrue(true);
	    $this->markTestSkipped('This is just an example skipped test');
    }
}
