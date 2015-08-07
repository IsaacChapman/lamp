<?php
class WebTest extends \PHPUnit_Framework_TestCase
{
    public function testWeb()
    {
	 $this->assertTrue(true);
         $url = 'http://localhost/';
         $pageContents = file_get_contents($url);
         echo($pageContents . "\n");
         $this->assertTrue(true);
    }
}
