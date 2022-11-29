<?php
require_once 'FileReaderInterface.php';
class StockManager{

    public function UpdateStockFromFile(string $filename, FileReaderInterface $FileReader){
      $stockItems = $FileReader->readFileAssociativeArray($filename);
      foreach($stockItems as $stockItem){
        print 'Updating the Database with item: '.$stockItem['name'].'</br>';
        
      }
    }

    
}



?>