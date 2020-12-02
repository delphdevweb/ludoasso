<?php

$de=$_POST['de'];
$face=$_POST['face'];

$listeDe= array ("");

for ($numeroDuDe=1; $numeroDuDe<$de+1; $numeroDuDe++) {
    $resultatDe = random_int(1,$face);
    array_push($listeDe, "$resultatDe");
}

$total = array_sum($listeDe);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="L'Ouvre-Boîtes est une ludothèque associatique">
    <title>L'Ouvre-Boîtes</title>
    <link rel="stylesheet" href="style.css">
</head>
<header>
    <h1>L'Ouvre-Boîtes</h1>
    <h2>Ludothèque associative</h2>
</header>
<body>
  <h3>Lancé de dés</h3>
    <main>
       <p> Le nombre de dés est de <?php echo $de ?></p>
       <p> Le nombre de faces est de <?php echo $face ?></p>
     <div>
       <p>     - - - - - - - - - - -  - - - - - - --</p>
       <p> Le résultat est <?php echo $total ?></p>
     </div>
<?php
for ($numeroDuDe=1; $numeroDuDe<$de+1; $numeroDuDe++) {
?>
       <p>     - - - - - - - - - - -  - - - - - - --</p>
       <p>Le dé numéro <?php echo $numeroDuDe ?> a été jeté, il est égal à <?php echo $listeDe[$numeroDuDe]?></p>
<?php
}
?>
     <div class="options">
         <a href="index.html"><input id="retour" type=submit value="Retour acceuil">
             <form method="post" action="resultat.php">
                 <input name="de" type="hidden" value="<?php echo ($de);?>">
                 <input name="face" type="hidden" value="<?php echo ($face);?>">
                 <input id="relance" type="submit" value="Relancez vos dés">
             </form>
     </div>
    </main>
  </div>
</body>
</html>














