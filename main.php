<?php include "listexmletudiant.php"?>
<html>
<head>
<title>Formulaire en XML</title>
</head>
<body>
<form action= "traitement.php" method="post">
<h2>Saisie les données d'un étuduiant</h2>
Id : <input type="text" name="id"><br>
nom : <input type="text" name="nom"><br>
note 1 : <input type="text" name="note1"><br>
note 2 : <input type="text" name="note2"><br>
note 3 : <input type="text" name="note3"><br>
<input type="submit" name="envoi" value="Insérer"><br>
</form>


<?php
listeetudiant();

$moy = listeetudiantmoy();

echo "<h1> la moyenne générale de la classe : $moy <br>";

updateetudiant();

listeetudiantsup12();
?>
</body>
</html>