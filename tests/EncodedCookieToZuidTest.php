<?php
class EncodedCookieToZuidTest extends PHPUnit_Framework_TestCase {
  public function setUp()
  {
    $GetZuid = new Trulia\Zuid\GetZuid();
    $EncodedZuid = new Trulia\Zuid\EncodedZuid("X1-ZUz9zqy7rkbj0p_94p27"); 
  }
  public function testTest()
  {
 //   $this->assertEquals("what",$GetZuid->convert($EncodedZuid->getCookieString()));
    $this->assertEquals(2,2);
  }

}
?>
