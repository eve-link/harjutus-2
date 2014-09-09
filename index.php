<!DOCTYPE html>
<html>
<head> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Harjutus-2 - PHP põhitõed</title>
</head>

<body> 

  <h1>See on minu esimene katsetus PHP-ga</h1>

  <?php 
  echo "Tere!" . "Siin on teine tekst";
  echo "<br>";
  echo "Järgmine rida";
  echo "<br>";
  ?>

  <br>
  <h2>Arvutamine</h2>
    <p>Siin teeme erinevaid tehteid</p> <!-- Siin on HTML kommentaar -->

    <?php echo "Nelja ja viie summa on " . (4 + 5) ; ?>
  <br>
  <?php  
    // Siin on PHP kommentaar.
    # See on Üherealine kommentaar.
  /* Jälle kommentaar*/
    echo 4 - 5 ; ?>
  <br>
    <?php echo 4 * 5 ; ?>
  <br>
    <?php  echo 4 / 5 ; ?>
  <br>
    <?php  echo "4" + "5" ; ?>

  <h2>Muutujad</h2>

<?php 
    $text = "Kahe arvu summa on";
    $number = 5 - 4;
    $number2 = 9;
?>
<?php 
    echo "<p>Numbri loetelu</p> 
    <ul>
      <li>".$text."</li>
      <li>".($number + $number2)."</li>
    </ul>"
    ;
 ?>

</body>
</html> 