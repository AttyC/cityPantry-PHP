<?php
namespace unit\attyc\citypantry;
use attyc\citypantry\Vendor;
use PHPUnit\Framework\TestCase;

class VendorTest extends TestCase
{
  public function testVendorArrayLengthEqualsOne() {
    $vendor = new Vendor('Nice Kitchen', 'SW1a3DF', 40);
    $vendor->createVendor($vendor);
    $result = $vendor->$vendors.count;
    $this->assertEquals(1, $result);
  }
}
