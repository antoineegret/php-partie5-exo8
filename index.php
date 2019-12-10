<?php
//ceci et un tableau en php une genre de super variable
//qui aurai des sous variable pour stocker plus d'information,
$mois[1] = 'Janvier';
$mois[2] = 'Février';
$mois[3] = 'Mars';
$mois[4] = 'Avril';
$mois[5] = 'Mai';
$mois[6] = 'Juin';
$mois[7] = 'Juillet';
$mois[8] = 'Août';
$mois[9] = 'Septembre';
$mois[10] = 'Octobre';
$mois[11] = 'Novembre';
$mois[12] = 'Décembre';
//ici j'affiche avec echo la valeur de la 8eme case du tableau
foreach ($mois as $keys => $value) { //foreach veut dire pour chaque
  echo $value;                       //=> dans ce sens la c'est un symbole d'association est non egal a plus petit
  ?><br>
  <?php
}
//echo "<br>". print_r ($mois); permet de retrouve les index ($key) de mon tableau
