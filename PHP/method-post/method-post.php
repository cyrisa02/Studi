<html>
  <head>
    <title>Superglobale $_POST</title>
  </head>
  <body>
    <form method="post" action="script.php">
      <label for="lastname">Lastname :</label>
      <input type="text" id="lastname" name="lastname" value="" />
      <input type="checkbox" name="languages[]" value="php" />PHP
      <input type="checkbox" name="languages[]" value="javascript" />Javascript
      <input type="checkbox" name="languages[]" value="perl" />PERL
      <button type="submit">Send</button>
    </form>
    <p>attaché au fichier script.php</p>
  </body>
</html>