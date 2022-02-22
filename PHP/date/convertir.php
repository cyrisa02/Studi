    <html>
    <body>
        <?php   
        
        echo 'time : '.time().'<br>';
        echo 'microtime : '.microtime().'<br>';
        echo 'microtime flottant : '.microtime(true);//L'exemple présenté montre comment récupérer le timestamp Unix de la date actuelle.

        echo 'time : '.time().'<br>';// affiche le jour d'aujourd'hui en s
        echo 'mktime : '.mktime().'<br>';
        echo '21/03/2020 13:56:12 : '.mktime(13,56,12,03,21,2020); //On peut constater que la fonction mktime()retourne bien le timestamp Unix courant par défaut et le timestamp Unix correspondant à la décomposition des composantes d'une date ciblée passées en paramètres.

        echo '03/01/2020 00:00:00 : '.mktime(0, 0, 0, 12, 34, 2019).'<br>'; //Ajout de (34-31) jours au 1er janvier 2020
        echo '01/12/2018 00:00:00 : '.mktime(0, 0, 0, 0, 1, 2019).'<br>'; // Soustraction d'un mois depuis le 01/01/2019
        echo '01/11/2018 00:00:00 : '.mktime(0, 0, 0, -1, 1, 2019).'<br>'; // Soustraction de deux mois depuis le 01/01/2019
        echo '01/01/2020 00:00:00 : '.mktime(0, 0, 0, 1, 1, 2020).'<br>';
        echo'01/01/2020 00:00:00 : '. mktime(0, 0, 0, 1, 1, 20); // Format d'année sur deux chiffres


        //calculez le temps d'exécution du code suivant :
        
    $start = microtime(true);

    $result = 1;

    for ($i = 1; $i <= 10000000; $i++) {
        $result = $i * $result;
    }

    echo 'Script terminé en '.(microtime(true) - $start).' secondes';


    //format date


    echo '03/01/2020 00:00:00 : '.date('d/m/Y H:i:s', mktime(0, 0, 0, 12, 34, 2019)).'<br>';
      echo '01/12/2018 00:00:00 : '.date('d/m/y h:i:s', mktime(0, 0, 0, 0, 1, 2019)).'<br>';
      echo '01/11/2018 00:00:00 : '.date('l jS \of F Y h:i:s A', mktime(0, 0, 0, -1, 1, 2019));


      //

      echo 'Demain : '.date('Y/m/d H:i:s', mktime(0, 0, 0, date('m'), date('d') + 1, date('Y'))).'<br>';
      echo 'Le mois dernier : '.date('Y/m/d H:i:s', mktime(0, 0, 0, date('m') - 1, date('d'), date('Y')));
    ?> 
        
    </body>
    </html>