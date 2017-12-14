<?php
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';

  // Parcours du tableau
  echo '<select name="annees">',"\n";
  for($i=1970; $i<=2030; $i++)
  {
    // L'année est-elle l'année courante ?
    if($i == date('Y'))
    {
      $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</select>',"\n";
?>
<?php
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';

  // Parcours du tableau
  echo '<select name="mois">',"\n";
  for($i=01; $i<=12; $i++)
  {
    // L'année est-elle l'année courante ?
    if($i == date('m'))
    {
      $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</select>',"\n";
?>

<?php
  // Variable qui ajoutera l'attribut selected de la liste déroulante
  $selected = '';

  // Parcours du tableau
  echo '<select name="jour">',"\n";
  for($i=01; $i<=31; $i++)
  {
    // L'année est-elle l'année courante ?
    if($i == date('d'))
    {
      $selected = ' selected="selected"';
    }
    // Affichage de la ligne
    echo "\t",'<option value="', $i ,'"', $selected ,'>', $i ,'</option>',"\n";
    // Remise à zéro de $selected
    $selected='';
  }
  echo '</select>',"\n";
?>
