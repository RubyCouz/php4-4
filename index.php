
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
<?php
function compare($number1, $number2)
{
  if ($number1 > $number2)
  {
  echo 'Le premier nombre est le plus grand.';
} elseif ($number1 <$number2)
{
  echo 'Le premier nombre est le plus petit.';
} elseif ($number1 == $number2)
{
echo 'Les nombres sont identique';
}
}
compare(63, 90)
 ?>
    </p>
  </body>
</html>
