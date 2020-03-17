<?php

echo "<a href=" . "#exo13". ">Go exo 13</a>";

echo "<h1>TP 5 </h1>";
echo "<a href='TP_5_PHP.php/?far=12' id='link'>cliquez pour avoir la valeur en degrés</a>";

if($_GET['far'] == NULL){

}
else {
    $deg = ($_GET['far'] - 32) * (5 / 9);
    echo "<br>La valeur en degrés est : " . $deg;
}

echo "<h2>Question 3</h2><br>";

echo "<form  method='post'>
    Valeur en Farheneit <input type='text' name = 'far2'>
</form>
";
if($_POST['far2'] == NULL){

}
else {
    $deg = ($_POST['far2'] - 32) * (5 / 9);
    echo "<br>La valeur en degrés est : " . $deg;
}
//POUR METTRE EN GET il faut remplacer method et le $_POST
?>
<h2>Exercice 2</h2><br>
<form  method='post'>
    <p>
        Nom <input type='text' name = 'nom' value="<?php if (isset($_POST['nom'])){echo $_POST['nom'];} ?>">
        Prenom <input type='text' name = 'prenom' value="<?php if (isset($_POST['prenom'])){echo $_POST['prenom'];} ?>">
    </p>
    <p>
        Débutant <input type='radio' value='débutant' name='lvl' <?php if (isset($_POST["lvl"])) { if ($_POST["lvl"] == "débutant"){ echo checked ; }}?>/>
        Avancé <input type='radio' value = 'avancé' name='lvl'<?php if (isset($_POST["lvl"])) { if ($_POST["lvl"] == "avancé"){ echo checked ; }}?>/>

    </p>
    <p>
        <input type='reset' value='Effacer'>
        <input type='submit' value='Envoyer'>
    </p>
</form>
<?php

if($_POST['nom'] == NULL ||$_POST['prenom'] == NULL || $_POST['lvl'] == NULL){

}
else{
    $phrase = "Bonjour " . $_POST['prenom'] . " " . $_POST['nom'] . " vous êtes " . $_POST['lvl'];
    echo $phrase;
}
?>

<h2>Exo 3</h2><br>
<form  method='post'>
    <p>
        Nom <input type='text' name = 'nom'>
        Prenom <input type='text' name = 'prenom'>
        Age <input type='number' name = 'age'>
    </p>
    <p>Langues pratiquées (2 au max ) </p>
    <select name='langues[]' multiple='multiple'>
        <option value='Francais'>français</option>
        <option value ='Anglais'>anglais</option>
        <option value='Allemand'>allemand</option>
        <option value='Espagnol'>espagnol</option>
    </select>
    <p>Compétences en informatiques (2 au max)</p>
    <p>
        HTML <input type='checkbox' value='HTML' name='HTML'>
        CSS <input type='checkbox' value='CSS' name='CSS'>
        PHP <input type='checkbox' value='PHP' name='PHP'>
        SQL <input type='checkbox' value='SQL' name ='SQL'>
        C <input type='checkbox' value='C' name='C'>
        C++ <input type='checkbox' value='C++' name='C++'>
        JS <input type='checkbox' value='JS' name='JS'>
        PYTHON <input type='checkbox' value='PYTHON' name='PYTHON'>
    </p>
    <p>
        <input type='reset' value='Effacer'>
        <input type='submit' value='Envoyer'>
    </p>
</form>
<?php
if($_POST['nom'] == NULL ||$_POST['prenom'] == NULL || $_POST['age'] == NULL){

}
else{
    echo "Vous êtes " . $_POST['prenom'] . " " . $_POST['nom'] . "<br>";
    echo "Vous avez " . $_POST['age'] . " ans. <br>";
    echo "Vous parlez :<br> ";
    foreach ($_POST['langues'] as $langue){
        echo "<li>$langue</li>";
    }
    echo "Vous avez des compétences informatiques en :<br>";
    if(isset($_POST['HTML'])){
        echo "<li>HTML</li>";
    }
    if(isset($_POST['CSS'])){
        echo "<li>CSS</li>";
    }
    if(isset($_POST['PHP'])){
        echo "<li>PHP</li>";
    } if(isset($_POST['SQL'])) {
        echo "<li>SQL</li>";
    }
    if(isset($_POST['C'])){
        echo "<li>C</li>";
    }
    if(isset($_POST['C++'])){
        echo "<li>C++</li>";
    }
    if(isset($_POST['JS'])){
        echo "<li>JS</li>";
    }

}

?>

<h2>Exo 4</h2>
<form  method='post'>
    <p>
        Nombre 1 <input type='number' name = 'nb1' value="<?php if (isset($_POST['nb1'])){echo $_POST['nb1'];} ?>">
        Nombre 2 <input type='number' name = 'nb2' value="<?php if (isset($_POST['nb2'])){echo $_POST['nb2'];} ?>">
        Résultat <input value="<?php

        if(isset($_POST['addition'])){
            echo $_POST['nb1'] + $_POST['nb2'];
        }
        if(isset($_POST['soustraction'])){
            echo $_POST['nb1'] - $_POST['nb2'];
        }
        if(isset($_POST['division'])){
            echo $_POST['nb1'] / $_POST['nb2'];
        }
        if(isset($_POST['Puissance'])){
            echo $_POST['nb1'] ** $_POST['nb2'];
        }
        ?>">
    </p>
    <p>
        <input type='submit' value='Addittion x+y' name="addition">
        <input type='submit' value='Soustraction x-y' name ="soustraction">
        <input type='submit' value='Division x/y' name ="division">
        <input type='submit' value='Puissance x^y' name="Puissance">

    </p>
</form>

<h2>Exo 5</h2>

<form action="page2.php" method="post" enctype="multipart/form-data">
    <p>
        Fichier 1 <input type="file" name="fichier1" value="choisir un fichier"><br>
        Fichier 2 <input type="file" name="fichier2" value="choisir un fichier"><br>
        Valider <input type="submit" value="Envoi">
    </p>
</form>

<?php
    if(isset($_FILES['fichier1'])){
        move_uploaded_file($_FILES["fichier1"]["tmp_name"],"fichier1.png");
    }
    if(isset($_FILES['fichier2'])){
        move_uploaded_file($_FILES["fichier2"]["tmp_name"],"fichier2.png");
    }


    if(isset($_FILES['fichier1']) && isset($_FILES['fichier2'])){
        echo "<table style='border: black 1px;'>
        <thead>
            <td>            </td>
            <td>Fichier 1   </td>
            <td>Fichier 2   </td>
        </thead>
        <tbody>
        <tr>
            <td>name</td>
            <td>". $_FILES['fichier1']['name'] .  "</td>
            <td>" . $_FILES['fichier2']['name'] . "</td>
        </tr>
        <tr>
        <td>type</td>
        <td>" . $_FILES['fichier1']['type'] ."</td>
        <td>" . $_FILES['fichier2']['type'] ."</td>
        </tr>
        <tr>
        <td>tmp_name</td>
        <td>" . $_FILES['fichier1']['tmp_name'] ."</td>
        <td>" . $_FILES['fichier2']['tmp_name'] ."</td>
        </tr>
        <tr>
        <td>error</td>
        <td>" . $_FILES['fichier1']['error'] ."</td>
        <td>" . $_FILES['fichier2']['error'] ."</td>
        </tr>
        <tr>
        <td>size</td>
        <td>" . $_FILES['fichier1']['size'] ."</td>
        <td>" . $_FILES['fichier2']['size'] ."</td>
        </tr>
        <tr>
        Probleme avec image affichage<br>
</tr>
        </tbody>
    </table>";
    }

?>

<h2>Exo 7</h2>
<?php
    setcookie('cookie0', 'test0');
    setcookie('cookie1', 'test1', time() + 3600*24*14);//expire au bout de 2 semaines
    echo "Methode 1 : cookie 1 :  " . $_COOKIE['cookie1'] . "<br> cookie 2 :  " . $_COOKIE['cookie0'] ."<br>";
    echo "Methode 2 :<br>";
    print_r($_COOKIE);
    setcookie('cookie0', '');
    echo "Affichage 2  <br> <br><br>";
    print_r($_COOKIE);



?>

<h2>Exo 8</h2>
<?php

$tableau = array(
    "cookies1" => "num1",
    "cookies2" => "num2",
    "cookies3" => "num3",
);

foreach ($tableau as  $key => $val){
    setcookie($key,$val);
    echo $key . " valeur : " . $val .  "<br>";//Attention ici dans un foreach donc pas besoin $tableau[$key] !!!!!!!
}


?>

<h2>Exo 9</h2>
<?php
    session_start();
    echo session_id();
        $_SESSION['Session1']= array("Anselmet","eloi@gmail.com", date("Y-m-d H:i:s"), "../TP_5");
    echo "<a href='session.php'>Click here</a>";

?>
<h2>Exo 10</h2>
<?php
    function affichage ($fic){
        $fichier = fopen($fic,'r+');
        if($fichier){
            while($ligne = fgets($fichier)){
                echo $ligne . "<br>";
            }
            fclose($fic);
        }
    }
    affichage('test-fic.txt');

    $id_file=fopen("test-fic.txt", "a+");
    fwrite($id_file, "\nFournier Quentin");
    fclose($id_file);
    echo "<h1>-----------------------------------------------</h1>";
affichage('test-fic.txt');


?>

<h2>Exo 11</h2>

<?php
    affichage('contact.txt');
    $annuaire = fopen('contact.txt', 'a+');
    $html = "<table><tbody>";
    if($annuaire){
        while($ligne = fgets($annuaire)){
            $html .= "<tr><td>" . str_replace(';',"</td><td>",$ligne) . "</td></tr>";
        }
        fclose($annuaire);
}
echo $html . "</tbody></table>";


?>

<h2>Exo 12</h2>
<form  method='post'>
    <table>
        <tr>
            <td>Nom</td>
            <td><input type='text' name = 'nom12'></td>
        </tr>
        <tr>
            <td>Prenom</td>
            <td><input type='text' name = 'prenom12'></td>
        </tr>
    </table>
    <input type='reset' value='Effacer'>
    <input type='submit' value='Envoyer'>
    </p>
</form>
<?php


session_start();
if( isset($_SESSION['compteur']) ) {
    if($_POST['prenom12'] == NULL || $_POST['nom12'] == NULL) {
        $_SESSION['compteur'];
    }else{
        $_SESSION['compteur']++;
    }
} else {
    $_SESSION['compteur'] = 1;
}

    if(isset($_POST['nom12']) && isset($_POST['prenom12']) && $_POST['nom12'] != NULL && $_POST['prenom12'] != NULL ){
        $nom = $_POST['nom12'];
        $prenom = $_POST['prenom12'];
        $connection = date("Y-m-d H:i:s");
        $string = $_SESSION['compteur'] . ";" .  $nom . ";" . $prenom . ";" . $connection . "\n";
        $connectFic = fopen('connections.txt', 'a+');
        fwrite($connectFic, $string);
        fclose($connectFic);
        $connectFic = fopen('connections.txt', 'r+');
        $html = "<table><tbody>";
        if($connectFic){
            while($ligne = fgets($connectFic)){
                $html .= "<tr><td>" . str_replace(';',"</td><td>",$ligne) . "</td></tr>";
            }
            fclose($connectFic);
        }
        echo $html . "</tbody></table>";
        fclose('connections.txt');
    }

?>


<h2 id="exo13">Exo 13</h2>
<form method="post">
    Etudiant 1 <input type='checkbox' name='etd1' value ="1">
    Etudiant 2 <input type='checkbox' name='etd2' value="2">
    Etudiant 3 <input type='checkbox' name='etd3' value="3">
    <p>
        <input type='submit' value='afficher' name='afficher'>
        <input type='submit' value='voter' name='voter'>
    </p>

</form>

<?php
session_start();
$voteFic = fopen('votes.txt', 'a+');

    if(isset($_POST['etd1'])){
        $string = "1;";

    }
    if(isset($_POST['etd2'])){
        $string = "2;";
    }
    if(isset($_POST['etd3'])){
        $string = "3;";
    }


if($voteFic){
    fwrite($voteFic, $string);
    fclose($voteFic);
}
fclose($voteFic);

    $vote1 = 0;
    $vote2 = 0;
    $vote3 = 0;
    $tot = 0;
    $voteFic = fopen('votes.txt', 'r+');
if($voteFic){
    while($char = fgetc($voteFic)){
        if($char == '1'){
            $vote1++;
            $tot++;
        }
        if($char == '2'){
            $vote2++;
            $tot++;
        }
        if($char == '3'){
            $vote3++;
            $tot++;
        }
    }
    fclose($connectFic);

}
$tabPercent = array();
$tabPercent[0] = $vote1/$tot*100;
$tabPercent[1] = $vote2/$tot*100;
$tabPercent[2] = $vote3/$tot*100;
if(isset($_POST['afficher'])){
    echo "Résultats des votes : <br>";
    echo "L'étudiant 1 a $vote1 voix soit " .  $tabPercent[0] ."%<br>";
    echo "L'étudiant 2 a $vote2 voix soit " .  $tabPercent[1] ."%<br>";
    echo "L'étudiant 3 a $vote3 voix soit " .  $tabPercent[2] ."%<br>";
    for($i=0;$i<3;$i++){
        if($tabPercent[$i] == max($tabPercent)){
            if($i == 0){
                $newDelegue = "Etudiant 1";
            }
            if($i == 1){
                $newDelegue = "Etudiant 2";
            }
            if($i == 2){
                $newDelegue = "Etudiant 3";
            }
        }
    }
    echo "Le nouveau délégué est : $newDelegue <br>";

}
?>

<h2>Exo 14</h2>

<form  method='post'>
    <p>
        Nom <input type='text' name = 'nom'>
        Prenom <input type='text' name = 'prenom'>
        Note <input type='number' name = 'note'>
    </p>
    <p>
        <input type='submit' value='Afficher Notes' name='Afficher'>
        <input type='submit' value='Envoyer Note' name='EnvoyerNote'>
    </p>
</form>

<?php
session_start();
if(!isset($_SESSION['table'])){
    $_SESSION['table'] = array();
}
if(isset($_POST['EnvoyerNote']) &&  $_POST['nom'] != NULL){
    array_push($_SESSION['table'], $_POST['nom']);
    array_push($_SESSION['table'], $_POST['prenom']);
    array_push($_SESSION['table'], $_POST['note']);
}
/*if(isset($_SESSION['table'])){
    if(isset($_POST['EnvoyerNote']) &&  $_POST['nom'] != NULL){
        array_push($_SESSION['table'], $_POST['nom']);
        array_push($_SESSION['table'], $_POST['prenom']);
        array_push($_SESSION['table'], $_POST['note']);
    }

}else{
    $_SESSION['table'] = array();
    if(isset($_POST['EnvoyerNote']) &&  $_POST['nom'] != NULL){
        array_push($_SESSION['table'], $_POST['nom']);
        array_push($_SESSION['table'], $_POST['prenom']);
        array_push($_SESSION['table'], $_POST['note']);
    }
}*/
if(isset($_POST['Afficher'])){
    $taille = sizeof($_SESSION['table']);
    $count = 0;
    $moyenne = 0;
    $notesCounter = 0;
    $admis = 0;
    $notesSum = 0;
    $htmlVotes = "<table><tbody><tr>";
    for($i=0;$i<$taille;$i++){
        if($count == 2){
            $count = 0;
            if($_SESSION['table'][$i] >= 10 ){
                $htmlVotes .= "<td style='background-color: green;'> " . $_SESSION['table'][$i] . "</td>";
                $admis++;
            }
            else{
                $htmlVotes .= "<td style='background-color: red;'> " . $_SESSION['table'][$i] . "</td>";
            }
            $notesCounter++;
            $notesSum = $notesSum + $_SESSION['table'][$i];
            $htmlVotes .= "</tr><tr>";
        }

        else {
            $htmlVotes .= "<td> " . $_SESSION['table'][$i] . "</td>";
            $count++;
        }


    }
}
if(is_nan($notesSum)){
    echo $htmlVotes . "</tr></tbody></table>";
}else{
    echo $htmlVotes . "</tr><tr><td>La moyenne est de :</td><td>" . $notesSum / $notesCounter."</td></tr><tr><td>Il y a $admis d'acceptés sur $notesCounter</td></tr></tbody></table>";
}




?>

<h2>Exo 15</h2>

<form  method='post'>
    <p>
        Tache <input type='text' name = 'tache'>
    </p>
    <p>
        <input type='submit' value='Valider' name='newTask'>
    </p>
</form>

<?php

session_start();
if(isset($_SESSION['taskcounter']) || isset($_SESSION['contenu'])){
    $_SESSION['taskcounter']++;
}
else{

    $_SESSION['taskcounter'] = 1;
    $_SESSION['contenu'] = "<table><tbody>";
}//FAire avec un fichier

    if(isset($_POST['newTask'])) {
        if (isset($_POST['tache'])) {
            $_SESSION['contenu'] .= "<tr></tr><td style='row" . $_SESSION['taskcounter'] . " '>" . $_POST['tache'] . "</td><td><input type='checkbox' name='check[]' ></td></tr>";
        }
    }



    echo $_SESSION['contenu'] . "</tr></tbody></table>";

?>


