<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="../css/inventory.css">
</head>
<body>
    <script src="../js/inventory.js"></script>

    <?php 
    $directory = '../txtfile'; //sökvägen till textfilerna
    
    $items = glob($directory . '/*');
    foreach($items as $item){
      if(is_file($item)){
      }
      if ($file = fopen($item, "r")) {
        while(!feof($file)) {
            $line = fgets($file);
            echo "<h1> $line </h1>";
        }
        fclose($file);
      }
    }    
    
    ?>
    
</body>
</html>