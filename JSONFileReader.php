<?php
require_once 'FileReaderInterface.php';
class JSONFileReader implements FileReaderInterface{

  public function readFileAssociativeArray(string $filename):array{
      //get file constanst to a JSON String
      $contentstring = file_get_contents($filename);

      //Decode into an associative array
      $items = json_decode($contentstring, true);

      //return items
      return $items;
  
  }

}

?>