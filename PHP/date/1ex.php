<html>
  <body>
    <?php
      $startDate = 1577836800; // 01/01/2020 00:00:00
      $endDate = 1577901600; // 01/01/2020 18:00:00
      
      if ($startDate < $endDate) {
        echo 'La date de départ est avant celle de fin'; 
      }
      else {
          echo 'Ce n est pas correct';
      }
    ?> 
  </body>
</html>