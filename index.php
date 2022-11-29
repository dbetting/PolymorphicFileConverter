<html>
  <head>
    <link rel = "stylesheet" href = "style.css">
    <title>PolyMorphic File Reader</title>
  </head>
  <body>
    <?php
      require_once "StockManager.php";
      require_once "CsvFileReader.php";
      require_once "JSONFileReader.php";

    ?>
    <?php echo '<p>PolyMorphic File Reader</p>'; ?> 

    <!--
   This project will read either data from an JSON or CSV file and return the contents as an associative array
    -->
    <?php
      $stockmanager = new StockManager();
      $csvFileReader = new CsvFileReader();
      $jsonFileReader = new JSONFileReader();
      $stockmanager->UpdateStockFromFile('inventory.csv', $csvFileReader);
      echo '</br>';
      $stockmanager->UpdateStockFromFile('inventory.json', $jsonFileReader);
    
   

    ?>

    
  </body>
</html>