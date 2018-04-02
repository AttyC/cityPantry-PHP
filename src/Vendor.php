<?php
namespace attyc\citypantry;
class Vendor {
  const vendors = [];

  function createVendor($vendor_info){
    $vendor=explode(";",$vendor_info);
    // print_r($new_vendor=explode(";","Well Kneaded;EC32BA;150"));
    array_push($vendors, $vendor);
    return $vendors;
  }

}
