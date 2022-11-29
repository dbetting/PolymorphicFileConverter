<?php
require_once 'FileReaderInterface.php';
class CsvFileReader implements FileReaderInterface
  {
    public function readFileAssociativeArray(string $filename):array{
      // Get the rows from the file as array
      $rows = array_map('str_getcsv', file($filename));
      //seperate the header 
      $header = array_shift($rows);
      $items = [];
      //create and associative array
      foreach($rows as $row){
          $items[] = array_combine($header,$row);
      }
      //return the associative array
      return $items;
    }
  }


?>