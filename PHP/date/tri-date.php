<html>
  <body>
    <?php
      $startDate = 1577836800; // 01/01/2020 00:00:00
      $endDate = 1577901600; // 01/01/2020 18:00:00
      $randomDate = 1199145600; // 01/01/2008 00:00:00
      $dates = [$startDate, $endDate, $randomDate];
      
      echo 'tableau initial :<br>';
      foreach ($dates as $date) {
        echo $date.'<br>';
      }

      sort($dates);
      echo 'tableau trié :<br>';
      foreach ($dates as $date) {
        echo $date.'<br>';
      }
    ?> 
  </body>
</html>