<?php

$currentMonth = (int) date('m');
$currentYear = date('Y'); // année sur 4 chiffres
$numDaysInMonth = (int) date('t'); // nbre de jour dans le mois
$firstDayOfMonth = (int) date('N', mktime(0, 0, 0, $currentMonth, 1, $currentYear));//attention avec mois et jours pbm avec le 0 et -1-> 0 hier et -1 avant hier
// N donne lundi pour 1 , mardi pour 2 etc
//Vous devez constituer un tableau contenant :
//en en-tête, le mois et l'année en cours
//suivis des jours de la semaine
//puis des jours du mois répartis à raison d'une semaine par ligne


?>
<table>
    <caption><?php echo date('m/Y') ?></caption>
    <thead><tr><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th><th>D</th></tr></thead>
    <tbody>
        <tr>
            <?php

            if (1 !== $firstDayOfMonth) {
                echo '<td colspan="' . ($firstDayOfMonth - 1) . '"></td>';
            }
            //$i correspond au  jour, aux cellules du tableau
            for ($i = 1; $i <= $numDaysInMonth; $i++) {
                echo '<td>'.$i.'</td>';
                
                if ((int) date('N', mktime(0, 0, 0, $currentMonth, $i, $currentYear)) === 7) {
                    echo '</tr><tr>';//ferme la ligne de la semaine au bout de 7 jours et l'ouvre donc tous les dimanches N=7
                }
            }
            
            $daysLeft = ($numDaysInMonth + $firstDayOfMonth) % 7;
            if (0 !== $daysLeft) {
                echo '<td colspan="' . ((7 - $daysLeft) + 1) . '"></td>';
            }// si il y a plus de 0 jour avant la fin du tableau  on ajoute des cases vides  pour terminer la ligne

            ?>
        </tr>
    </tbody>
</table>