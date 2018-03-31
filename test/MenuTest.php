<?php
namespace unit\attyc\citypantry;
use attyc\citypantry\Menu;
use PHPUnit\Framework\TestCase;

class MenuTest extends TestCase
{
  public function testVendorArrayIsEmpty() {
    $menu = new Menu();
    $result = $menu->vendors();
    $this->assertEquals([], $result);
  }
}
