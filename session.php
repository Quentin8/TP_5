<?php
session_start();

echo  "Bonjour " . $_SESSION['Session1'][0]."<br>";
echo "Ta premiere connection était le : " . $_SESSION['Session1'][2]."<br>";
$link = $_SESSION['Session1'][3];
echo "<a href='$link' target='_blank'>Clique pour ton lien pref </a>";
?>
