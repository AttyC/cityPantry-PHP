<?php
namespace attyc\citypantry;

require 'Vendor.php'
class Menu    {
  public

  function parseFile($file){
    $file = new SplFileObject("vendors.txt");
    $vendor = new Vendor();

    // Loop until we reach the end of the file.
    while (!$file->eof()) {
      $line = $file->fgets();

      if($line != "\n"){
        //if line ends with max covers = vendor
        if(preg_match("/[a-zA-Z]{1,2}([0-9]{1,2}|[0-9][a-zA-Z])\s*[0-9][a-zA-Z]{2}/", $line)){
          $vendor->createVendor($line);
        }
        else if(preg_match("/\d\dh/", $line)){
          echo 'item' . $line;
          //$items->createItem($line, $vendor);
        };
      };
    };
  }

}
